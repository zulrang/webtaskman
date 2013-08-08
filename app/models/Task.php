<?php

class Task extends Eloquent {

	protected $fillable = ['title', 'estimate'];
	protected $guarded = ['id'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'task';

}
