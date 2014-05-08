<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/register', function()
{
	return View::make('register');
});

Route::post('/register', function()
{
	#TODO: Passing the form to UserController to further process it.
});

Route::post('/login', function()
{
	#TODO: Login user and redirect to corresponding homepage according to user type.
});

Route::get('/admin/home', function()
{
	return View::make('admin.home');
});

Route::get('/investor/home', function()
{
	return View::make('investor.home');
});

Route::get('/enterprise/home', function()
{
	return View::make('enterprise.home');
});