<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotProfileSpendsourceTable extends Migration {
 public function up() {
  Schema::create('efflux_entourage.profile_spendsource', function (Blueprint $table) {
   $table->id();
   $table->foreignId('profile_id')->constrained()->onDelete('cascade');
   $table->foreignId('spendsource_id')->references('id')->on('efflux_assets.spendsources')->onDelete('cascade');
  });
 }
 public function down() {
  Schema::table('efflux_entourage.profile_spendsource', function (Blueprint $table) {
   $table->dropForeign(['profile_id']);
   $table->dropForeign('efflux_entourage_profile_spendsource_spendsource_id_foreign');
   $table->dropIndex('efflux_entourage_profile_spendsource_spendsource_id_foreign');
   $table->dropColumn(['spendsource_id']);
  });
  Schema::dropIfExists('efflux_entourage.profile_spendsource');
 }
}