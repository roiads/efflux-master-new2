<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProxiesTable extends Migration {
 public function up() {
  Schema::create('efflux_assets.proxies', function (Blueprint $table) {
   $table->id();
   $table->ipAddress('ip')->unique();
   $table->integer('port')->default(80);
   $table->string('country', 2)->nullable();
   $table->string('user', 50)->nullable();
   $table->string('pass', 50)->nullable();
   $table->tinyInteger('https')->default(0);
   $table->tinyInteger('status')->default(1);
   $table->timestamps();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_assets.proxies');
 }
}