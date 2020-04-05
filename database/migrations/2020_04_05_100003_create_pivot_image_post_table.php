<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotImagePostTable extends Migration {
	public function up() {
		Schema::create('efflux_content.image_page', function (Blueprint $table) {
			$table->id();
			$table->foreignId('image_id')->constrained()->onDelete('cascade');
			$table->foreignId('post_id')->constrained()->onDelete('cascade');
			$table->foreignId('page_id')->constrained()->onDelete('cascade');
			$table->timestamps();
		});
	}
	public function down() {
		Schema::table('efflux_content.image_page', function (Blueprint $table) {
				$table->dropForeign(['image_id']);
				$table->dropForeign(['post_id']);
				$table->dropForeign(['page_id']);
		});
		Schema::dropIfExists('efflux_content.image_page');
	}
}
