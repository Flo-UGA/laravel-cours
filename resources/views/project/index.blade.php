@extends('layout')

@section('title','Project')

@section('content')
  
  <ul>
        @foreach ($projects as $project )
          <li><a href="/project/{{ $project->id}}">{{ $project->title }}</a></li>
        @endforeach
  </ul>

  <a href="/project/create">Créer un nouveau projet</a>
  
@endsection
