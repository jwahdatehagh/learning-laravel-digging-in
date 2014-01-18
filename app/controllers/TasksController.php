<?php

class TasksController extends BaseController {
	public function index() 
	{
		// fetch all tasks
		$tasks = Task::all();

		// load a view to display them
		return $tasks;
	}
}