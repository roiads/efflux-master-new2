<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration{
    public function up(){
        Schema::create('efflux_accounts.profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->default(0);
            $table->string('firstname',100);
            $table->string('lastname',100);
            $table->date('dob');
            $table->string('gender',25);
            $table->string('country',2);
            $table->string('city',100);
            $table->string('postcode',25);
            $table->string('proxy',255);
            $table->text('environment');
            $table->text('notes');
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('efflux_accounts.profiles');
    }
}
