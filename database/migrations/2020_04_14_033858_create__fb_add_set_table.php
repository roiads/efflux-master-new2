<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFbAddSetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('efflux_accounts.FbAdSet', function (Blueprint $table) {
            $table->string('id');
            $table->string('campaign_id')->references('id')->on('FbCampaign');
            $table->string('name');
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
        Schema::dropIfExists('FbAdSet');
    }
}
