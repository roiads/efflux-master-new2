<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {
 public function up() {
  Schema::create('efflux_users.users', function (Blueprint $table) {
   $table->id();
   $table->tinyInteger('status')->default(1);
   $table->string('username', 100)->unique();
   $table->string('password');
   $table->string('api_token', 80)->nullable();
   $table->string('firstname', 100)->nullable();
   $table->string('lastname', 100)->nullable();
   $table->string('email', 100)->unique();
   $table->string('phone')->nullable();
   $table->timestamp('email_verified_at')->nullable();
   $table->rememberToken();
   $table->softDeletes();
   $table->timestamps();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_users.users');
 }
}