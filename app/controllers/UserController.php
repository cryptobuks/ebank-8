<?php

class UserController extends BaseController {

	/**
	 * Retrieve post parameters and save them into database.
	 *
	 * @return Register Success Page
	 */
	public function register() {

		#TODO: Retrieve post parameters and save them into database.
		
	}

	/**
	 * Retrieve post parameters and verify corresponding user.
	 *
	 * @return User's home page
	 */
	public function login() {
		#TODO: Login user and redirect to homepage according to user type.
		$username = Input::get('username');
		$password = Input::get('passwd');

	}

	/**
	 * Logout current user.
	 *
	 * @return index page
	 */
	public function logout() {

	}
}