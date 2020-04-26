<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpendSourcesTable extends Migration {
 public function up() {
  Schema::create('efflux_assets.spendsources', function (Blueprint $table) {
   $table->id();
   $table->integer('status')->default(1);
   $table->string('spend', 100);
   $table->text('details')->nullable();
   $table->timestamps();
   $table->softDeletes();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_assets.spendsources');
 }
}