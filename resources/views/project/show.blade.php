@extends('layout')

@section('title','Project - Détails')

@section('content')
  <h2 class="title">{{ $project->title }}</h2>

  <div class="content">{{ $project->description }}</div>

  <p>
    <a href="/project/{{ $project->id }}/edit">Edit</a>
  </p>
@endsection
