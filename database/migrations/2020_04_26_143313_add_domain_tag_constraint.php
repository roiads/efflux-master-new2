<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDomainTagConstraint extends Migration {
 public function up() {
  foreach (['posts', 'pages', 'images', 'tags'] as $t) {
   Schema::table("efflux_site.$t", function (Blueprint $table) {
    $table->foreignId('domain_id')->nullable()->default(null)
     ->reference('id')->on('efflux_assets.domains')
     ->onDelete('cascade');
   });
  }
 }
 public function down() {
 }
}