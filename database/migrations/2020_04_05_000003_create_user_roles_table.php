<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRolesTable extends Migration {
 public function up() {
  Schema::create('efflux_users.roles', function (Blueprint $table) {
   $table->id();
   $table->string('name', 100)->unique();
   $table->text('description')->nullable();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_users.roles');
 }
}