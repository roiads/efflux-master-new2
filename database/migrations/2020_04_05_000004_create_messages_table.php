<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration {
 public function up() {
  Schema::create('efflux_track.messages', function (Blueprint $table) {
   $table->id();
   $table->tinyInteger('seen')->default(0);
   $table->string('name', 100);
   $table->string('email', 100);
   $table->text('message');
   $table->timestamps();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_track.messages');
 }
}