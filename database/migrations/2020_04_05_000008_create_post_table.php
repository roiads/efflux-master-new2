<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration {
	public function up() {
		Schema::create('efflux_content.posts', function (Blueprint $table) {
			$table->id();
			$table->tinyInteger('status')->default(1);
			$table->string('layout', 50)->nullable();
			$table->string('title', 255);
			$table->string('description', 255)->nullable();
			$table->string('excerpt', 255)->nullable();
			$table->text('body');
			$table->softDeletes();
			$table->timestamps();
		});
	}
	public function down() {
		Schema::dropIfExists('efflux_content.posts');
	}
}
