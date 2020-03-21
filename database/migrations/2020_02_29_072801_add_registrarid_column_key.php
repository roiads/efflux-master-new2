<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRegistraridColumnKey extends Migration {
	public function up() {
		Schema::table('domains.domains', function (Blueprint $c) {
			$c->foreign('registrar_id')->references('id')->on('domains.registrars')->onDelete('cascade');
		});
	}
	public function down() {
		//
	}
}
