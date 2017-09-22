<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBgCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bg_comments', function(Blueprint $table)
		{
			$table->foreign('post_id', 'fk_comments_posts1')->references('id')->on('bg_posts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_comments_users1')->references('id')->on('bg_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bg_comments', function(Blueprint $table)
		{
			$table->dropForeign('fk_comments_posts1');
			$table->dropForeign('fk_comments_users1');
		});
	}

}
