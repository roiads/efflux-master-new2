<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDomainRouteColumns extends Migration
{
    public function up()
    {
        Schema::table('domains.routes', function (Blueprint $table) {
            $table->integer('page_id')->nullable();
            $table->integer('domain_id')->nullable();
        });
    }
    public function down()
    {
        Schema::table('pages.pages', function (Blueprint $table) {
            $table->dropColumn(['page_id', 'domain_id']);
        });
    }
}
