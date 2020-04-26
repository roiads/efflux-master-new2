<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDomainTypeColumn extends Migration {
 public function up() {
  Schema::table('efflux_assets.domains', function (Blueprint $table) {
   $table->string('type', 100)->nullable();
  });
 }
 public function down() {
  Schema::table('efflux_assets.domains', function (Blueprint $table) {

  });
 }
}