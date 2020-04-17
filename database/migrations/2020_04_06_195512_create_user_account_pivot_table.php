<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccountPivotTable extends Migration {
 public function up() {
  Schema::create('efflux_users.user_account', function (Blueprint $table) {

   $table->id();
   $table->foreignId('user_id')
    ->nullable()
    ->default(null)
    ->constrained()
    ->onDelete('cascade');
   $table->foreignId('role_id')
    ->nullable()
    ->default(null)
    ->constrained()
    ->onDelete('cascade');
   $table->foreignId('account_id')
    ->nullable()
    ->default(null)
    ->references('id')
    ->on('efflux_entourage.accounts')
    ->onDelete('cascade');
   $table->foreignId('profile_id')
    ->nullable()
    ->default(null)
    ->references('id')
    ->on('efflux_entourage.profiles')
    ->onDelete('cascade');
   $table->timestamps();
  });
 }
 public function down() {
  Schema::table('efflux_users.user_account', function (Blueprint $table) {
   $table->dropForeign('efflux_users_user_account_user_id_foreign');
   $table->dropIndex('efflux_users_user_account_user_id_foreign');
   $table->dropForeign('efflux_users_user_account_account_id_foreign');
   $table->dropIndex('efflux_users_user_account_account_id_foreign');
   $table->dropForeign('efflux_users_user_account_profile_id_foreign');
   $table->dropIndex('efflux_users_user_account_profile_id_foreign');
   $table->dropForeign('efflux_users_user_account_role_id_foreign');
   $table->dropIndex('efflux_users_user_account_role_id_foreign');
   $table->dropColumn(['user_id', 'account_id', 'profile_id', 'role_id']);
  });
  Schema::dropIfExists('efflux_users.user_account');
 }
}