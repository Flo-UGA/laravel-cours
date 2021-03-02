@extends('layout')

@section('title','Project - Create')

@section('content')

  <h2>Créer un nouveau project</h2>
  
  <form method="POST" action="/project">
    @csrf
    <div>
      @error('title')
        <p style="color:red">{{$errors->first('title')}}</p>
      @enderror
      <input @error('title') style="border-color:red" @enderror type="text" name="title" placeholder="Titre du projet" value="{{old('title')}}">
    </div>
    <div>
      <textarea name="description" placeholder="Description du projet"></textarea>
    </div>
    <div>
      <button type="submit">Créer le projet</button>
    </div>
  </form>
  
@endsection
