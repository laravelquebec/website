<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignsToDiscussions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('discussions', function(Blueprint $table)
		{
			$table->integer('message_id')->unsigned()->index()->nullable();
			$table->foreign('message_id')->references('id')->on('messages')->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('discussions', function(Blueprint $table)
		{
			$table->dropForeign('discussions_message_id_foreign');
			$table->dropIndex('discussions_message_id_index');
			$table->dropColumn('message_id');
		});
	}

}
