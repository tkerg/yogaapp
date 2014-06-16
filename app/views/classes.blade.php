@extends('layout')
@section('content')
      <div class="page-header">
        <a class="btn btn-default pull-right">Add Class</a>
        <h1>{{ $title }}</h1>
      </div>
      <div class="col-sm-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">All Classes</h3>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-hover">
              <tr>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              @foreach ($classes as $class)
              <tr>
                  <td>{{ $class['name'] }}</td>
                  <td>
                    <a class="btn btn-default btn-xs edit edit-{{ $class['id'] }}" data-toggle="modal" data-target="#editClass">Edit</a>
                  </td>
                  <td>
                    <a class="btn btn-warning btn-xs rm rm-{{ $class['id'] }}" data-toggle="modal" data-target="#deleteClass">Delete</a>
                  </td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
      @include('modals')
    @stop