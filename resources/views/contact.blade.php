@extends('layout')

@section('title','Contact')

@section('content')
  <p>Bonjour, {{$name}}</p>
  <ul>
        @foreach ($tasks as $task )
          <li>{{$task}}</li>
        @endforeach
  </ul>
@endsection
