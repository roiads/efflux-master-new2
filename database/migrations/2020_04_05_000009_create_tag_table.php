<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagTable extends Migration {
 public function up() {
  Schema::create('efflux_site.tags', function (Blueprint $table) {
   $table->id();
   $table->tinyInteger('status')->default(1);
   $table->string('name', 100)->unique();
   $table->string('tagline', 100)->nullable();
   $table->timestamps();
   $table->softDeletes();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_site.tags');
 }
}