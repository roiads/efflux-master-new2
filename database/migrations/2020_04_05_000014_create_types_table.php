<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration {
 public function up() {
  Schema::create('efflux_entourage.types', function (Blueprint $table) {
   $table->id();
   $table->string('name', 100);
   $table->string('url', 255);
   $table->text('notes');
  });
  DB::statement("ALTER TABLE `efflux_entourage`.`types` ADD `logo` MEDIUMBLOB");
 }
 public function down() {
  Schema::dropIfExists('efflux_entourage.types');
 }
}