<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountSettingsTable extends Migration {
 public function up() {
  Schema::create('efflux_entourage.account_settings', function (Blueprint $table) {
   $table->id();
   $table->string('setting', 100);
   $table->text('value');
   $table->foreignId('account_id')
    ->constrained()
    ->onDelete('cascade');
   $table->timestamps();
   $table->softDeletes();
  });
 }
 public function down() {

  Schema::table('efflux_users.user_account', function (Blueprint $table) {
   $table->dropForeign(['account_id']);
  });
  Schema::dropIfExists('efflux_entourage.account_settings');
 }
}