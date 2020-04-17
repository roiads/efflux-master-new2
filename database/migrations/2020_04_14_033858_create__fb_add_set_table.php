<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFbAddSetTable extends Migration {
 public function up() {
  Schema::create('efflux_entourage.FbAdSet', function (Blueprint $table) {
   $table->string('id');
   $table->string('campaign_id')->references('id')->on('efflux_entourage.FbCampaign')->onDelete('cascade');
   $table->string('name');
   $table->timestamps();
   $table->primary('id');

  });
 }
 public function down() {
  Schema::dropIfExists('efflux_entourage.FbAdSet');
 }
}