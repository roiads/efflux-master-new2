<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileDetailsColumns extends Migration {
 public function up() {
  Schema::create('efflux_assets.useragents', function (Blueprint $table) {
   $table->id();
   $table->integer('status')->default(1);
   $table->string('name', 100)->nullable();
   $table->string('string', 255);
   $table->text('notes')->nullable();
   $table->timestamps();
   $table->softDeletes();
  });
  Schema::table('efflux_entourage.profiles', function (Blueprint $table) {
   $table->foreignId('proxy_id')
    ->nullable()
    ->default(null)
    ->references('id')
    ->on('efflux_assets.proxies');
   $table->foreignId('useragent_id')
    ->nullable()
    ->default(null)
    ->references('id')
    ->on('efflux_assets.useragents');
  });
 }
 public function down() {
  Schema::table('efflux_entourage.profiles', function (Blueprint $table) {
   $table->dropForeign('efflux_entourage_profiles_proxy_id_foreign');
   $table->dropForeign('efflux_entourage_profiles_useragent_id_foreign');
   $table->dropIndex('efflux_entourage_profiles_proxy_id_foreign');
   $table->dropIndex('efflux_entourage_profiles_useragent_id_foreign');
   $table->dropColumn(['proxy_id', 'useragent_id']);
  });
  Schema::dropIfExists('efflux_assets.useragents');
 }
}