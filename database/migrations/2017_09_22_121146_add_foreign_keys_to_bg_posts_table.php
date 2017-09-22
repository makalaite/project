<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBgPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bg_posts', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_posts_users')->references('id')->on('bg_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bg_posts', function(Blueprint $table)
		{
			$table->dropForeign('fk_posts_users');
		});
	}

}
