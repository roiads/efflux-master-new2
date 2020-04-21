<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEffluxAssetsServersTable extends Migration {
 public function up() {
  Schema::create('efflux_assets.servers', function (Blueprint $t) {
   $t->id();
   $t->string('name', 100);
   $t->integer('status')->default(1);
   $t->string('provider', 100)->nullable();
   $t->string('sys_os', 100)->nullable();
   $t->string('sys_cpus', 100)->nullable();
   $t->string('sys_harddrive', 100)->nullable();
   $t->string('sys_memory', 100)->nullable();
   $t->string('public_ip', 100)->unique();
   $t->string('private_ip', 100)->nullable();
   $t->string('user', 100);
   $t->string('pass', 100)->nullable();
   $t->string('sudo_pass', 100)->nullable();
   $t->string('db_user', 100)->nullable();
   $t->string('db_pass', 100)->nullable();
   $t->text('notes');
   $t->softDeletes();
   $t->timestamps();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_assets.servers');
 }
}