<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccountPivotTable extends Migration {
 public function up() {
  Schema::create('efflux_users.user_entourage', function (Blueprint $table) {
   $table->id();
   $table->foreignId('user_id')->constrained()->onDelete('cascade');
   $table->foreignId('account_id')->nullable()->default(null)->references('id')->on('efflux_entourage.accounts')->onDelete('cascade');
   $table->foreignId('profile_id')->nullable()->default(null)->references('id')->on('efflux_entourage.profiles')->onDelete('cascade');
  });
 }
 public function down() {
  Schema::table('efflux_users.user_entourage', function (Blueprint $table) {
   $table->dropForeign(['user_id']);
   $table->dropForeign('efflux_users_user_entourage_account_id_foreign');
   $table->dropIndex('efflux_users_user_entourage_account_id_foreign');
   $table->dropForeign('efflux_users_user_entourage_profile_id_foreign');
   $table->dropIndex('efflux_users_user_entourage_profile_id_foreign');
   $table->dropColumn(['user_id', 'account_id', 'profile_id']);
  });
  Schema::dropIfExists('efflux_users.user_entourage');
 }
}