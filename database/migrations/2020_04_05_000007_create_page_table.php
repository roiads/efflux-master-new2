<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageTable extends Migration {
 public function up() {
  Schema::create('efflux_site.pages', function (Blueprint $table) {
   $table->id();
   $table->tinyInteger('status')->default(1);
   $table->string('layout', 50);
   $table->string('title', 100);
   $table->text('body');
   $table->softDeletes();
   $table->timestamps();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_site.pages');
 }
}