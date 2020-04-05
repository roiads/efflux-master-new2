<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountSettingsTable extends Migration{
    public function up(){
        Schema::create('efflux_accounts.account_settings', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->text('value',100);
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('efflux_accounts.account_settings');
    }
}
