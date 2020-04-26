<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotPostImageTable extends Migration {
 public function up() {
  Schema::create('efflux_site.post_image', function (Blueprint $table) {
   $table->id();
   $table->foreignId('image_id')->constrained()->onDelete('cascade');
   $table->foreignId('post_id')->nullable()->default(NULL)->constrained()->onDelete('cascade');
   $table->foreignId('page_id')->nullable()->default(NULL)->constrained()->onDelete('cascade');
  });
 }
 public function down() {
  Schema::table('efflux_site.post_image', function (Blueprint $table) {
   $table->dropForeign(['image_id']);
   $table->dropForeign(['post_id']);
   $table->dropForeign(['page_id']);
  });
  Schema::dropIfExists('efflux_site.post_image');
 }
}