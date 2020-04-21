<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainsTable extends Migration {
 public function up() {
  Schema::create('efflux_assets.domains', function (Blueprint $table) {
   $table->id();
   $table->tinyInteger('status')->default(1);
   $table->tinyInteger('ssl')->default(0);
   $table->string('name', 100)->unique();
   $table->string('path', 100)->nullable();
   $table->string('repository', 200)->nullable();
   $table->softDeletes();
   $table->timestamps();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_assets.domains');
 }
}