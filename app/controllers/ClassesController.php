<?php

class ClassesController extends BaseController {

  /*
  |--------------------------------------------------------------------------
  | View Controller
  |--------------------------------------------------------------------------
  |
  | Draw initial views
  |
  | Route::get('classes/{ajax}', 'ClassesController@{METHOD}');
  |
  */
  public function index()
  {
    $title = 'Classes';
    $classes = Classes::all();
    $modals = array(
      array(
      'name' => 'editClass',
      'title' => 'Edit Class',
      'buttons' => array(
        array('content' => 'Save', 'href' => '#', 'special' => 'success'),
        array('content' => 'Cancel', 'href' => '#')
      ),
      'content' => View::make('modals.classes.edit'),
      'size' => 'lg'
      ),
      array(
      'name' => 'deleteClass',
      'title' => 'Remove Class',
      'buttons' => array(
        array('content' => 'Remove', 'href' => '#', 'special' => 'warning'),
        array('content' => 'Cancel', 'href' => '#')
      ),
      'content' => 'delete class',
      'size' => 'lg'
      )
    );
    return View::make('classes')
      ->with('title', $title)
      ->with('classes', $classes)
      ->with('modals', $modals);
  }

}
