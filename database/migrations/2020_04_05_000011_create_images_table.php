<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration {
 public function up() {
  Schema::create('efflux_site.images', function (Blueprint $table) {
   $table->id();
   $table->tinyInteger('status')->default(1);
   $table->binary('image');
   $table->string('path', 255);
   $table->string('title', 255);
   $table->string('alt', 255);
   $table->softDeletes();
   $table->timestamps();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_site.images');
 }
}