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
  $data['title'] = 'Dashboard';
  return View::make('dash')->with('data', $data);
});
Route::get('clients', function()
{
  $data['clients'] = User::all();
  $data['title'] = 'Clients';
  return View::make('clients')->with('data', $data);
});
Route::get('classes', 'ClassesController@index');
Route::get('teachers', 'TeachersController@index');
Route::get('reminder', function()
{
  return View::make('reminder');
});
Route::post('foo/bar', function()
{
    return 'Hello World';
});
// Route::controller('clients', 'UserController');