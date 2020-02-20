<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InitialDbMigrations extends Migration {
	public function up() {
		Schema::create('users.users', function (Blueprint $c) {
			$c->increments('id');
			$c->string('email')->unique();
			$c->string('username', 100)->unique();
			$c->string('password');
			$c->string('first_name', 100);
			$c->string('last_name', 100);
			$c->string('phone')->nullable();
			$c->timestamp('email_verified_at')->nullable();
			$c->text('profile')->nullable();
			$c->string('avatar')->nullable();
			$c->tinyInteger('status')->default(1);
			$c->rememberToken();
			$c->softDeletes();
			$c->timestamps();
		});
		Schema::create('users.password_resets', function (Blueprint $c) {
			$c->string('email')->index();
			$c->string('token');
			$c->timestamp('created_at')->nullable();
		});
		Schema::create('failed_jobs', function (Blueprint $c) {
			$c->increments('id');
			$c->text('connection');
			$c->text('queue');
			$c->longText('payload');
			$c->longText('exception');
			$c->timestamp('failed_at')->useCurrent();
		});
		Schema::create('users.roles', function (Blueprint $c) {
			$c->increments('id');
			$c->string('name', 100)->unique();
			$c->text('description')->nullable();
		});
		Schema::create('accounts.types', function (Blueprint $c) {
			$c->increments('id');
			$c->string('name', 100)->unique();
			$c->text('notes');
			$c->boolean('active')->default(true);
			$c->timestamps();
		});
		Schema::create('domains.domains', function (Blueprint $c) {
			$c->increments('id');
			$c->string('name', 100)->unique();
			$c->text('notes');
			$c->boolean('active')->default(true);
			$c->timestamps();
			$c->unsignedInteger('registrar_id')->nullable();
			$c->foreign('registrar_id')->references('id')->on('domains.registrars');
		});
		Schema::create('pages.pages', function (Blueprint $c) {
			$c->increments('id');
			$c->string('name', 100)->unique();
			$c->text('notes');
			$c->boolean('active');
			$c->timestamps();
			$c->longText('html')->nullable();
			$c->longText('css')->nullable();
			$c->longText('js')->nullable();
		});
		Schema::create('domains.routes', function (Blueprint $c) {
			$c->increments('id');
			$c->string('name', 100)->unique();
			$c->text('notes');
			$c->boolean('active');
			$c->timestamps();
			$c->unsignedInteger('page_id')->nullable();
			$c->unsignedInteger('domain_id')->nullable();
			$c->foreign('page_id')->references('id')->on('pages.pages');
			$c->foreign('domain_id')->references('id')->on('domains.domains');
		});
		Schema::create('accounts.accounts', function (Blueprint $c) {
			$c->increments('id');
			$c->string('name', 100)->unique();
			$c->string('username', 100);
			$c->string('password', 100);
			$c->tinyInteger('status')->default(0);
			$c->text('notes');
			$c->boolean('active');
			$c->timestamps();
		});
		Schema::create('campaigns.campaigns', function (Blueprint $c) {
			$c->increments('id');
			$c->string('name', 100)->unique();
			$c->text('notes');
			$c->boolean('active');
			$c->timestamps();
		});
		Schema::create('domains.registrars', function (Blueprint $c) {
			$c->bigIncrements('id');
			$c->string('name', 100)->unique();
			$c->string('username', 100);
			$c->string('password', 100);
			$c->string('email', 100);
			$c->text('notes');
			$c->tinyInteger('status')->default('1');
			$c->timestamps();
		});
		Schema::create('accounts.cc', function (Blueprint $c) {
			$c->increments('id');
			$c->string('type', 20);
			$c->string('cc', 20);
			$c->string('exp', 20);
			$c->integer('cvv');
			$c->decimal('balance', 8, 2)->default('0.00');
			$c->timestamps();
		});
	}
	public function down() {
		Schema::dropIfExists('users.users');
		Schema::dropIfExists('users.password_resets');
		Schema::dropIfExists('efflux.failed_jobs');
		Schema::dropIfExists('users.roles');
		Schema::dropIfExists('accounts.types');
		Schema::dropIfExists('domains.domains');
		Schema::dropIfExists('pages.pages');
		Schema::dropIfExists('domains.routes');
		Schema::dropIfExists('accounts.accounts');
		Schema::dropIfExists('campaigns.campaigns');
		Schema::dropIfExists('domains.registrars');
		Schema::dropIfExists('accounts.cc');
	}
}
