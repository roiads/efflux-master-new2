<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotProfileSpendsourceTable extends Migration{
    public function up(){
        Schema::create('efflux_accounts.profile_spendsource', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->constrained()->onDelete('cascade');
            $table->foreignId('spendsource_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down(){
        Schema::table('efflux_accounts.profile_spendsource', function (Blueprint $table) {
            $table->dropForeign(['profile_id']);
            $table->dropForeign(['spendsource_id']);
        });
        Schema::dropIfExists('efflux_accounts.profile_spendsource');
    }
}
