<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContentTagImageConstraints extends Migration {
 public function up() {
  Schema::table('efflux_content.tags', function (Blueprint $table) {
   $table->foreignId('image_id')->nullable()->default(null)->constrained();
  });
 }
 public function down() {
  Schema::table('efflux_content.tags', function (Blueprint $table) {
   $table->dropForeign('efflux_content_tags_image_id_foreign');
   $table->dropIndex('efflux_content_tags_image_id_foreign');
   $table->dropColumn(['image_id']);
  });
 }
}