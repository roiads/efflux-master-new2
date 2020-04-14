<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFbAddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('efflux_accounts.FbAd', function (Blueprint $table) {
            $table->string('id');
            $table->string('adSet_id')->references('id')->on('FbAdSet');
            $table->float('budget');
            $table->date('started_at');
            $table->date('ended_at');
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FbAd');
    }
}
