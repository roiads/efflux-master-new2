<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpendSourcesTable extends Migration {
 public function up() {
  Schema::create('efflux_assets.spendsources', function (Blueprint $table) {
   $table->id();
   $table->integer('status')->default(0);
   $table->string('source', 100);
   $table->text('details');
   $table->timestamps();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_assets.spendsources');
 }
}