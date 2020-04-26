<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewslettersTable extends Migration {
 public function up() {
  Schema::create('efflux_track.newsletters', function (Blueprint $table) {
   $table->id();
   $table->string('name');
   $table->string('email');
   $table->timestamps();
   $table->softDeletes();
  });
 }
 public function down() {
  Schema::dropIfExists('effluxefflux_track.newsletters');
 }
}