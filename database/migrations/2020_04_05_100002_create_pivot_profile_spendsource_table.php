<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotProfileSpendsourceTable extends Migration {
 public function up() {
  Schema::create('efflux_entourage.profile_spend', function (Blueprint $table) {
   $table->id();
   $table->foreignId('profile_id')
    ->constrained()
    ->onDelete('cascade');
   $table->foreignId('spend_id')
    ->references('id')
    ->on('efflux_assets.spendsources')
    ->onDelete('cascade');
   $table->timestamps();
  });
 }
 public function down() {
  Schema::table('efflux_entourage.profile_spend', function (Blueprint $table) {
   $table->dropForeign(['profile_id']);
   $table->dropForeign('efflux_entourage_profile_spend_spend_id_foreign');
   $table->dropIndex('efflux_entourage_profile_spend_spend_id_foreign');
   $table->dropColumn(['spend_id']);
  });
  Schema::dropIfExists('efflux_entourage.profile_spend');
 }
}