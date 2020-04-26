<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContentRouteConstraints extends Migration {
 public function up() {
  Schema::table('efflux_site.posts', function (Blueprint $table) {
   $table->foreignId('image_id')
    ->nullable()->default(null)
    ->constrained()
    ->onDelete('cascade');
  });
  Schema::table('efflux_site.routes', function (Blueprint $table) {
   $table->foreignId('post_id')
    ->nullable()
    ->default(null)
    ->constrained()
    ->onDelete('cascade');
   $table->foreignId('page_id')
    ->nullable()
    ->default(null)
    ->constrained()
    ->onDelete('cascade');
   $table->foreignId('domain_id')
    ->references('id')
    ->on('efflux_assets.domains')
    ->onDelete('cascade');
  });
 }
 public function down() {
  Schema::table('efflux_site.posts', function (Blueprint $table) {
   $table->dropForeign('efflux_site_posts_image_id_foreign');
   $table->dropIndex('efflux_site_posts_image_id_foreign');
   $table->dropColumn(['image_id']);
  });
  Schema::table('efflux_site.routes', function (Blueprint $table) {
   $table->dropForeign('efflux_site_routes_domain_id_foreign');
   $table->dropIndex('efflux_site_routes_domain_id_foreign');
   $table->dropForeign('efflux_site_routes_page_id_foreign');
   $table->dropIndex('efflux_site_routes_page_id_foreign');
   $table->dropForeign('efflux_site_routes_post_id_foreign');
   $table->dropIndex('efflux_site_routes_post_id_foreign');
   $table->dropColumn(['post_id', 'page_id', 'domain_id']);
  });
 }
}