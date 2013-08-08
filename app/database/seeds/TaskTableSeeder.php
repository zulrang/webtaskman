<?php

class TaskTableSeeder extends Seeder {
	public function run() {
		DB::table('task')->delete();

		Task::create([ 'title' => 'Task 1', 'estimate' => 2 ]);
		Task::create([ 'title' => 'Go to the store', 'estimate' => 1 ]);
		Task::create([ 'title' => 'Finish Brian\'s site', 'estimate' => 4 ]);
	}
}

