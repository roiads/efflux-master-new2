<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration {
 public function up() {
  Schema::create('efflux_users.password_resets', function (Blueprint $table) {
   $table->string('email', 100)->index();
   $table->string('token', 255);
   $table->timestamp('created_at')->nullable();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_users.password_resets');
 }
}