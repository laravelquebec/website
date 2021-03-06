<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('password', 60)->nullable();
			$table->string('email')->unique();
			$table->string('avatar')->nullable();
			$table->string('name')->nullable();
			$table->string('location')->nullable();
			$table->string('homepage')->nullable();
			$table->string('company')->nullable();
			$table->text('description')->nullable();
			$table->boolean('hireable')->default(false);
			$table->rememberToken();
			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
