<?php

class Task extends Eloquent {
	public function user() 
	{
		return $this->blelongsTo('User');
	}
}
