<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProxyProviderConstraint extends Migration {
 public function up() {
  Schema::table('efflux_assets.proxies', function (Blueprint $table) {
   $table->foreignId('provider_id')->nullable()->default(null)->references('id')->on('efflux_entourage.accounts')->onDelete('cascade');
  });
 }
 public function down() {
  Schema::table('efflux_assets.proxies', function (Blueprint $table) {
   $table->dropForeign('efflux_assets_proxies_provider_id_foreign');
   $table->dropIndex('efflux_assets_proxies_provider_id_foreign');
   $table->dropColumn(['provider_id']);
  });
 }
}