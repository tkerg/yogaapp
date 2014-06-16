@extends('layout')
@section('content')
  <h3>Clients</h3>
  @foreach($data['clients'] as $client)
    <p>{{ $client }}</p>
  @endforeach
@stop