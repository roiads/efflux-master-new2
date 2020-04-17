<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMlProfileId extends Migration {
 public function up() {
  Schema::table('efflux_entourage.FbProfile', function (Blueprint $table) {
   $table->string('ml_profile_id')->unique();
  });
 }
 public function down() {
  Schema::table('efflux_entourage.FbProfile', function (Blueprint $table) {
   $table->dropColumn('ml_profile_id');
  });
 }
}