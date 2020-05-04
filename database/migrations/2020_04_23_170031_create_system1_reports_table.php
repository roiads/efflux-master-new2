<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystem1ReportsTable extends Migration {
 public function up() {
  Schema::create('efflux_report.api_system1', function (Blueprint $t) {
   $t->id();
   $t->timestampTz('date');
   $t->string('campaign_domain', 100)->nullable()->default(NULL);
   $t->string('subid', 100)->nullable()->default(NULL);
   $t->integer('mobile')->default(0);
   $t->integer('mobile_unique')->default(0);
   $t->integer('desktop')->default(0);
   $t->integer('desktop_unique')->default(0);
   $t->integer('searches')->default(0);
   $t->integer('clicks')->default(0);
   $t->decimal('revenue', 10, 2)->default(0.0);
   $t->unique(['date', 'campaign_domain', 'subid']);
   $t->softDeletes();
   $t->timestamps();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_report.api_system1');
 }
}