<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutesTable extends Migration {
	public function up() {
		Schema::create('domains.routes', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('name', 100)->unique();
			$table->text('notes');
			$table->boolean('active');
			$table->timestamps();
		});
	}

	public function down() {
		Schema::dropIfExists('domains.routes');
	}
}
