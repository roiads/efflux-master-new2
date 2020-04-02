
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPostPivotTable extends Migration {
	public function up() {
		Schema::create('users.user_post', function (Blueprint $t) {
			$t->increments('id');
			$t->unsignedInteger('user_id');
			$t->unsignedInteger('post_id');
			$t->foreign('user_id')->references('id')->on('users.users')->onDelete('cascade');
			$t->foreign('post_id')->references('id')->on('content.posts')->onDelete('cascade');
			$t->timestamps();
		});
	}
	public function down() {
		Schema::dropIfExists('users.user_post');
	}
}
