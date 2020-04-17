<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFbAddRecordTable extends Migration {
 public function up() {
  Schema::create('efflux_entourage.FbAdRecord', function (Blueprint $table) {
   $table->string('ad_id')->references('id')->on('efflux_entourage.FbAd')->onDelete('cascade');
   $table->date('from');
   $table->date('to');
   $table->float('budget');
   $table->bigInteger('results');
   $table->bigInteger('reach');
   $table->bigInteger('impressions');
   $table->float('spent');
   $table->bigInteger('likes');
   $table->timestamps();
   $table->primary(['ad_id', 'from', 'to']);
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_entourage.FbAdRecord');
 }
}