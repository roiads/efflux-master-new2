<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFbAddTable extends Migration {
 public function up() {
  Schema::create('efflux_entourage.FbAd', function (Blueprint $table) {
   $table->string('id');
   $table->string('adSet_id')->references('id')->on('efflux_entourage.FbAdSet')->onDelete('cascade');
   $table->float('budget');
   $table->date('started_at');
   $table->date('ended_at');
   $table->string('name');
   $table->timestamps();
   $table->primary('id');
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_entourage.FbAd');
 }
}