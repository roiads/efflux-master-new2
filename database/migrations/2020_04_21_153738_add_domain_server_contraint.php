<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDomainServerContraint extends Migration {
 public function up() {
  Schema::table('efflux_assets.domains', function (Blueprint $table) {
   $table->foreignId('server_id')
    ->nullable()
    ->default(null)
    ->constrained()
    ->onDelete('cascade');
  });
 }
 public function down() {
  Schema::table('efflux_assets.domains', function (Blueprint $table) {
   $table->dropForeign('efflux_assets_domains_server_id_foreign');
   $table->dropIndex('efflux_assets_domains_server_id_foreign');
   $table->dropColumn(['server_id']);
  });
 }
}