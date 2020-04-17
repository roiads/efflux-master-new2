<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFbAddAccountTable extends Migration {
 public function up() {
  Schema::create('efflux_entourage.FbAdAccount', function (Blueprint $table) {
   $table->string('id');
   $table->string('name');
   $table->string('business_id')->references('business_id')->on('efflux_entourage.FbProfile')->onDelete('cascade');
   $table->timestamps();
   $table->primary('id');
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_entourage.FbAdAccount');
 }
}