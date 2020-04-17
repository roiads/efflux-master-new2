<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFbCampaignTable extends Migration {
 public function up() {
  Schema::create('efflux_entourage.FbCampaign', function (Blueprint $table) {
   $table->string('id');
   $table->string('account_id')->references('id')->on('efflux_entourage.FbAdAccount')->onDelete('cascade');
   $table->string('name');
   $table->timestamps();
   $table->primary('id');
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_entourage.FbCampaign');
 }
}