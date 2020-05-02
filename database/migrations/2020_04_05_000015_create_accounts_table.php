<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration {
 public function up() {
  Schema::dropIfExists('efflux_entourage.accounts');
  Schema::create('efflux_entourage.accounts', function (Blueprint $table) {
   $table->id();
   $table->string('username', 100);
   $table->string('password', 100);
   $table->timestamps();
   $table->softDeletes();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_entourage.accounts');
 }
}