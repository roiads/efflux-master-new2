<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotRoleUserTable extends Migration {
 public function up() {
  Schema::create('efflux_users.user_role', function (Blueprint $table) {
   $table->id();
   $table->foreignId('user_id')->constrained()->onDelete('cascade');
   $table->foreignId('role_id')->constrained()->onDelete('cascade');
  });
 }
 public function down() {
  Schema::table('efflux_users.user_role', function (Blueprint $table) {
   $table->dropForeign(['user_id']);
   $table->dropForeign(['role_id']);
  });
  Schema::dropIfExists('efflux_users.user_role');
 }
}