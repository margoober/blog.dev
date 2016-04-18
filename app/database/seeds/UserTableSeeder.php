<?php

class UserTableSeeder extends Seeder
{
	public function run() {
		$user = new User();
		$user->first_name = $_ENV['USER_FIRST_NAME'];
		$user->last_name = $_ENV['USER_LAST_NAME'];
		$user->username = $_ENV['USER_USERNAME'];
		$user->email = $_ENV['USER_EMAIL'];
		$user->password = $_ENV['USER_PASSWORD'];
		$user->profile_img = $_ENV['USER_PROFILE_IMG'];

		$user->save();
	}
}
