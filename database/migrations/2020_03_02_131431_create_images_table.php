<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration {
	public function up() {
		Schema::create('content.images', function (Blueprint $t) {
			$t->increments('id');
			$t->string('image', 100);
			$t->boolean('active')->default(true);
			$t->timestamps();
		});
	}
	public function down() {
		Schema::dropIfExists('content.images');
	}
}
