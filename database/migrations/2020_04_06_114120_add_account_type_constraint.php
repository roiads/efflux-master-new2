<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAccountTypeConstraint extends Migration {
 public function up() {
  Schema::table('efflux_entourage.accounts', function (Blueprint $table) {
   $table->foreignId('type_id')->constrained()->onDelete('cascade');
   $table->foreignId('profile_id')->constrained()->onDelete('cascade');
  });
 }
 public function down() {
  Schema::table('efflux_entourage.accounts', function (Blueprint $table) {
   $table->dropForeign('efflux_entourage_accounts_profile_id_foreign');
   $table->dropForeign('efflux_entourage_accounts_type_id_foreign');
   $table->dropIndex('efflux_entourage_accounts_profile_id_foreign');
   $table->dropIndex('efflux_entourage_accounts_type_id_foreign');
   $table->dropColumn(['type_id', 'profile_id']);
  });
 }
}