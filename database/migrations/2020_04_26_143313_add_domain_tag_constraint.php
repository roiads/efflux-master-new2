<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDomainTagConstraint extends Migration {
 public $tables = ['posts', 'pages', 'images', 'tags', 'post_image'];
 public function up() {
  foreach ($this->tables as $t) {
   Schema::table("efflux_site.$t", function (Blueprint $table) {
    $table->foreignId('domain_id')
     ->nullable()
     ->default(null)
     ->reference('id')
     ->on('efflux_assets.domains')
     ->onDelete('cascade');
   });
  }
 }
 public function down() {
  foreach ($this->tables as $t) {
   $this->t = $t;
   Schema::table("efflux_site.$t", function (Blueprint $table) {
    $table->dropForeign('efflux_site_' . $this->t . '_domain_id_foreign');
    $table->dropIndex('efflux_site_' . $this->t . '_domain_id_foreign');
    $table->dropColumn(['domain_id']);
   });
  }
 }
}