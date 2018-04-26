<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLikeableTables extends Migration {

	public function up() {
		
		Schema::create('likeable_likes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('likable_id', 36);
			$table->string('likable_type', 255);
			$table->string('user_id', 36)->index();
			$table->timestamps();
		});
		
		Schema::create('likeable_like_counters', function(Blueprint $table) {
			$table->increments('id');
			$table->string('likable_id', 36);
			$table->string('likable_type', 255);
			$table->unsignedInteger('count')->default(0);
		});
		
	}

	public function down() {
		Schema::drop('likeable_likes');
		Schema::drop('likeable_like_counters');
	}
}
