<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteTagsTable extends Migration {
 public function up() {
  Schema::create('site_tags', function (Blueprint $table) {
   $table->id();
   $table->timestamps();
  });
 }
 public function down() {
  Schema::dropIfExists('site_tags');
 }
}