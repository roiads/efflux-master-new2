<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration {
 public function up() {
  Schema::create('efflux_entourage.profiles', function (Blueprint $table) {
   $table->id();
   $table->integer('status')->default(0);
   $table->string('title', 25)->nullable();
   $table->string('firstname', 100)->nullable();
   $table->string('middlename', 100)->nullable();
   $table->string('lastname', 100)->nullable();
   $table->string('occupation', 100)->nullable();
   $table->date('dob')->nullable();
   $table->string('gender', 25)->nullable();
   $table->decimal('height', 10, 2)->nullable();
   $table->decimal('weight', 10, 2)->nullable();
   $table->string('country', 2)->nullable();
   $table->string('address', 255)->nullable();
   $table->string('city', 100)->nullable();
   $table->string('state', 100)->nullable();
   $table->string('postcode', 25)->nullable();
   $table->text('notes')->nullable();
   $table->timestamps();
   $table->softDeletes();
  });
 }
 public function down() {
  Schema::dropIfExists('efflux_entourage.profiles');
 }
}