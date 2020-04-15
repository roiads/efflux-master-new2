<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileDetailsColumns extends Migration {
 public function up() {
  Schema::create('efflux_assets.useragents', function (Blueprint $table) {
   $table->id();
   $table->integer('status')->default(1);
   $table->string('name', 100);
   $table->string('string', 255);
   $table->text('notes');
   $table->timestamps();
  });
  Schema::table('efflux_accounts.profiles', function (Blueprint $table) {
   $table->string('title', 25)->nullable()->after('status');
   $table->string('middlename', 100)->nullable()->after('firstname');
   $table->string('address', 255)->nullable()->after('country');
   $table->string('state', 25)->nullable()->after('city');
   $table->string('occupation', 255)->nullable()->after('lastname');
   $table->decimal('height', 8, 2)->nullable()->after('gender');
   $table->decimal('weight', 8, 2)->nullable()->after('height');
   $table->foreignId('proxy_id')->nullable()->default(null)->after('postcode')->references('id')->on('efflux_assets.proxies');
   $table->foreignId('useragent_id')->nullable()->default(null)->after('proxy_id')->references('id')->on('efflux_assets.useragents');
   $table->string('browser', 50)->nullable()->after('useragent_id');
  });
 }
 public function down() {
  Schema::table('efflux_accounts.profiles', function (Blueprint $table) {
   $table->dropForeign('efflux_accounts_profiles_proxy_id_foreign');
   $table->dropForeign('efflux_accounts_profiles_useragent_id_foreign');
   $table->dropIndex('efflux_accounts_profiles_proxy_id_foreign');
   $table->dropIndex('efflux_accounts_profiles_useragent_id_foreign');
  });
  Schema::table('efflux_accounts.profiles', function (Blueprint $table) {
   $table->dropColumn(['title', 'middlename', 'address', 'state', 'occupation', 'height', 'weight', 'browser', 'proxy_id', 'useragent_id']);
  });
  Schema::dropIfExists('efflux_assets.useragents');
 }
}