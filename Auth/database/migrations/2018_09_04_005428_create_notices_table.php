<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function boot() {
		Schema::defaultStringLength(191);
	}
	public function up() {
		Schema::create('notices', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->OnDelete('cascade');
			$table->string('title', 200);
			$table->text('description');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('notices');
	}
}
