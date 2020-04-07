
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotUserPostTable extends Migration {
	public function up() {
		Schema::create('efflux_users.user_post', function (Blueprint $table) {
			$table->id();
			$table->foreignId('user_id')->references('id')->on('efflux_users.users')->onDelete('cascade');
			$table->foreignId('post_id')->references('id')->on('efflux_content.posts')->onDelete('cascade');
			$table->timestamps();
		});
	}
	public function down() {
		Schema::dropIfExists('efflux_users.user_post');
	}
}
