@extends('layout')

@section('title','Home')

@section('content')
  <p>Bonjour, {{$name}}</p>

  <a href="/project">Voir les projets</a>
@endsection
