<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContentColumnsToPages extends Migration
{
    public function up()
    {
        Schema::table('pages.pages', function (Blueprint $table) {
            $table->longText('html')->nullable();
            $table->longText('css')->nullable();
            $table->longText('js')->nullable();
        });
    }
    public function down()
    {
        Schema::table('pages.pages', function (Blueprint $table) {
            $table->dropColumn(['html', 'css', 'js']);
        });
    }
}
