<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContentPostCssColumn extends Migration {
 public function up() {
  Schema::table('efflux_content.posts', function (Blueprint $table) {
   $table->text('css')->nullable();
  });
 }
 public function down() {
  Schema::table('efflux_content.posts', function (Blueprint $table) {
   $table->dropColumn('css');
  });
 }
}