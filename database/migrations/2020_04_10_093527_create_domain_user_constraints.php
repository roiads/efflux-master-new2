<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainUserConstraints extends Migration {
 public function up() {
  Schema::create('efflux_users.user_domain', function (Blueprint $table) {
   $table->id();
   $table->foreignId('user_id')->constrained()->onDelete('cascade');
   $table->foreignId('domain_id')->references('id')->on('efflux_site.domains')->onDelete('cascade');
   $table->timestamps();
  });
 }
 public function down() {
  Schema::table('efflux_users.user_account', function (Blueprint $table) {
   $table->dropForeign('efflux_users_user_domain_user_id_foreign');
   $table->dropIndex('efflux_users_user_domain_user_id_foreign');
   $table->dropForeign('efflux_users_user_domain_domain_id_foreign');
   $table->dropIndex('efflux_users_user_domain_domain_id_foreign');
   $table->dropColumn(['user_id', 'domain_id']);
  });
  Schema::dropIfExists('efflux_users.user_domain');
 }
}