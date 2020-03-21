<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetatagTable extends Migration {
	public function up() {
		Schema::create('content.metatag', function (Blueprint $t) {
			$t->increments('id');
			$t->string('name', 50);
			$t->string('content', 155);
			$t->boolean('active')->default(true);
			$t->timestamps()
			;});
	}
	public function down() {
		Schema::dropIfExists('content.metatag');
	}
}
