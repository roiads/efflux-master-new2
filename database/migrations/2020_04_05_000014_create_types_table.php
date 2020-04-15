<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration{
    public function up(){
        Schema::create('efflux_accounts.types', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('url',255);
            $table->string('login_url',255);
            $table->string('signup_url',255);
            $table->binary('logo');
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('efflux_accounts.types');
    }
}
