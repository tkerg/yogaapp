<?php

class ViewController extends BaseController {

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
    $data['title'] = 'Dashboard';
    return View::make('dash')->with('data', $data);
  }

}
