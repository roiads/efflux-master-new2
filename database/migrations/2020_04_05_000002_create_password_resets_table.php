<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration {
	public function up() {
		Schema::create('efflux_users.password_resets', function (Blueprint $table) {
			$table->string('email')->index();
			$table->string('token');
			$table->timestamp('created_at')->nullable();
		});
	}
	public function down() {
		Schema::dropIfExists('efflux_users.password_resets');
	}
}