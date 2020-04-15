<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainsTable extends Migration {
	public function up() {
		Schema::create('efflux_content.domains', function (Blueprint $table) {
			$table->id();
			$table->tinyInteger('status')->default(1);
			$table->string('name', 100)->unique();
			$table->string('path', 100);
			$table->softDeletes();
			$table->timestamps();
		});
	}
	public function down() {
		Schema::dropIfExists('efflux_content.domains');
	}
}
