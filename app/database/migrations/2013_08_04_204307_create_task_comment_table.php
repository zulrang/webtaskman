<?php

use Illuminate\Database\Migrations\Migration;

class CreateTaskCommentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('task_comment', function($table) {
			$table->increments('id');
			$table->text('comment');
			$table->integer('task_id')->references('id')->on('task');
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
		Schema::drop('task_comment');
	}

}