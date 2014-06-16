<?php

class TeachersController extends BaseController {

  /*
  |--------------------------------------------------------------------------
  | View Controller
  |--------------------------------------------------------------------------
  |
  | Draw initial views
  |
  | Route::get('/', 'ViewController@{METHOD}');
  |
  */
  public function index()
  {
    $title = $data['title'] = 'Teachers';
    $teachers = $data['teachers'] = Teachers::all();
    return View::make('teachers')->with('title', $title)->with('teachers', $teachers)->with('data', $data);
  }
}
