<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProxiesTable extends Migration {
	public function up() {
		Schema::create('assets.proxies', function (Blueprint $c) {
			$c->increments('id');
			$c->ipAddress('ip');
			$c->integer('port');
			$c->unsignedInteger('provider_id')->nullable();
			$c->string('country', 2);
			$c->string('user', 50)->nullable();
			$c->string('pass', 50)->nullable();
			$c->tinyInteger('https')->default(0);
			$c->tinyInteger('status')->default(1);
			$c->timestamps();
		});
	}
	public function down() {
		Schema::dropIfExists('proxies');
	}
}
