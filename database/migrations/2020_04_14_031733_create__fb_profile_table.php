<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFbProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('efflux_accounts.FbProfile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('business_id')->unique();
            $table->string('username');
            $table->string('password');
            $table->string('fullname');
            $table->binary('gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('efflux_accounts.FbProfile');
    }
}
