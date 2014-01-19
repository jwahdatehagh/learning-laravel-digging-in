<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		User::truncate();

		User::create([
			'username' => 'jalil',
			'email' => 'j.wahdatehagh@gmail.com',
			'password' => '1234'
		]);

		User::create([
			'username' => 'nassim',
			'email' => 'n.wahdatehagh@gmail.com',
			'password' => '1234'
		]);
	}

}