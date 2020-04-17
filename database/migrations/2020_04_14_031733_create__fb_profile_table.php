<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFbProfileTable extends Migration {
 public function up() {
  Schema::create('efflux_entourage.FbProfile', function (Blueprint $table) {
   $table->id();
   $table->string('business_id')->unique();
   $table->string('username');
   $table->string('password');
   $table->string('fullname');
   $table->binary('gender');
   $table->timestamps();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_entourage.FbProfile');
 }
}