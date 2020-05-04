<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingTable extends Migration {
 public function up() {
  Schema::create('efflux_track.actions', function (Blueprint $t) {
   $t->id();
   $t->string('action', 50)->index();
   $t->string('ip', 25)->index();
   $t->string('country', 2)->nullable();
   $t->string('user_type', 50)->nullable();
   $t->string('uri', 250)->nullable()->index();
   $t->string('isp', 100)->nullable();
   $t->string('network', 100)->nullable();
   $t->string('domain', 100)->nullable();
   $t->string('user_agent', 200)->nullable();
   $t->string('referrer', 200)->nullable();
   $t->string('city', 100)->nullable();
   $t->text('notes')->nullable();
   $t->timestamps();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_track.actions');
 }
}