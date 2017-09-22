<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBgVotesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bg_votes', function(Blueprint $table)
		{
			$table->foreign('post_id', 'fk_votes_posts1')->references('id')->on('bg_posts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('post_id', 'fk_votes_users2')->references('id')->on('bg_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bg_votes', function(Blueprint $table)
		{
			$table->dropForeign('fk_votes_posts1');
			$table->dropForeign('fk_votes_users2');
		});
	}

}
