@extends('layouts.app')

@section('title', 'Grupo')

@section('content')
@if ($group)
  <h2>Un grupo</h2>
  <p>{{ $group->getId() }}</p>
  <h3>{{ $group->getName() }}</h3>
  <p> 
    <div>
      <a href="/group/{{ $group->getId() }}/edit"><button>Editar</button></a>
      <form action="/group/{{ $group->getId() }}" method="post" class="inline">
        <input type="hidden" name="_method" value="delete">
        <input type="submit" value="eliminiar">
      </form>      
    </div>
  </p>
  <h3>Usuarios:</h3>
  <ul>
    @foreach($group->users() as $user ) 
      <li>{{ $user->getName() }}</li>
    @endforeach
  </ul>
  <p>
    <a href="/group/{{ $group->getId() }}/users"><button>Modificar los usuarios</button></a>
  </p>
@else
  <h2>Grupo no encontrado</h2>
@endif
@endsection 