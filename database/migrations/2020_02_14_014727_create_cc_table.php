<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcTable extends Migration {
  public function up() {
    Schema::create('accounts.cc', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('type', 20);
      $table->string('cc', 20);
      $table->string('exp', 20);
      $table->integer('cvv');
      $table->decimal('balance',8,2)->default('0.00');
      $table->timestamps();
    });
  }
  public function down() {
    Schema::dropIfExists('accounts.cc');
  }
}
