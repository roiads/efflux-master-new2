<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagePostPivotTable extends Migration {
	public function up() {
		Schema::create('content.image_post', function (Blueprint $t) {
			$t->increments('id');
			$t->unsignedInteger('image_id');
			$t->unsignedInteger('post_id');
			$t->foreign('image_id')->references('id')->on('content.images')->onDelete('cascade');
			$t->foreign('post_id')->references('id')->on('content.posts')->onDelete('cascade');
			$t->timestamps();
		});
	}
	public function down() {
		Schema::dropIfExists('content.image_post');
	}
}
