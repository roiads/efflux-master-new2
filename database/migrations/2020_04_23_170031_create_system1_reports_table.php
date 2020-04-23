<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystem1ReportsTable extends Migration {
 public function up() {
  Schema::create('efflux_track.system1_reports', function (Blueprint $table) {
   $table->id();

   $table->date('date');
   $table->integer('campaign_domain')->default(0);

   $table->integer('mobile')->default(0);
   $table->integer('mobile_unique')->default(0);
   $table->integer('desktop')->default(0);
   $table->integer('desktop_unique')->default(0);
   $table->integer('searches')->default(0);
   $table->integer('clicks')->default(0);
   $table->decimal('revenue', 10, 2);
   $table->unique('date', 'campaign_domain');
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_track.system1_reports');
 }
}