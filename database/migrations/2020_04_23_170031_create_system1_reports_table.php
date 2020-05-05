<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystem1ReportsTable extends Migration {
 public function up() {
  Schema::create('efflux_report.api_system1', function (Blueprint $t) {
   $t->id();
   $t->date('date');
   $t->string('domain', 100)->nullable();
   $t->string('subid', 100)->nullable();
   $t->integer('sessions')->nullable();
   $t->integer('sessions_mobile')->nullable();
   $t->integer('sessions_desktop')->nullable();
   $t->integer('unique')->nullable();
   $t->integer('unique_mobile')->nullable();
   $t->integer('unique_desktop')->nullable();
   $t->integer('searches')->nullable();
   $t->integer('clicks')->nullable();
   $t->decimal('revenue', 10, 2)->nullable();
   $t->unique(['date', 'domain', 'subid']);
   $t->softDeletes();
   $t->timestamps();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_report.api_system1');
 }
}