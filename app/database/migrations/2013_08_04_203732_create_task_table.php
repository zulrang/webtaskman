<?php

use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task', function($table) {
			$table->increments('id');
			$table->string('title');
			$table->integer('estimate')->default(1);
			$table->integer('actual')->nullable();
			$table->timestamp('complete')->nullable();
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
		Schema::drop('task');
	}

}