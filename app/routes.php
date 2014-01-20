<?php

Route::get('/', ['as' => 'home', 'uses' => 'TasksController@index']);
Route::get('tasks/{id}', 'TasksController@show')->where('id', '\d+');

Route::get('{username}/tasks', function($username)
{
	// find user by username from users table
	$user = User::whereUsername($username)->first();
	
	// get all tasks associated with that user
	// return Task::whereUserId($user->id)->get(); --> instead assign relationships...
	return $user->tasks;
	// return them
});

Route::get('{username}/tasks/{id}', function($username, $id) 
{
	// find the task by its id
	$user = User::whereUsername($username)->first();
	$task = $user->tasks()->findOrFail($id);

	// and load a view to display it
	return View::make('tasks.show', compact('task'));
});