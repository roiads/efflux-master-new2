<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('accounts.accounts', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name', 100)->unique();
			$table->string('username', 100);
			$table->string('password', 100);
			$table->tinyInteger('status')->default(0);
			$table->text('notes');
			$table->boolean('active');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('accounts.accounts');
	}
}
