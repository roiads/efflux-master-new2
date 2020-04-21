<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotPostTagTable extends Migration {
 public function up() {
  Schema::create('efflux_site.post_tag', function (Blueprint $table) {
   $table->id();
   $table->foreignId('tag_id')->constrained()->onDelete('cascade');
   $table->foreignId('post_id')->constrained()->onDelete('cascade');
  });
 }
 public function down() {
  Schema::table('efflux_site.post_tag', function (Blueprint $table) {
   $table->dropForeign(['tag_id']);
   $table->dropForeign(['post_id']);
  });
  Schema::dropIfExists('efflux_site.post_tag');
 }
}