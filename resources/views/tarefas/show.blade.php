@extends('layouts.principal')


@section('title', 'Listando')

@section('menu')

@section('content')
<h1>Informação detalhada sobre a tarefa {{$tarefa['titulo']}} </h1>

<div class="card text-white bg-secondary mb-4">
  <h5 class="card-header">{{$tarefa['titulo']}} </h5>
  <div class="card-body">
   <p class="card-text">{{$tarefa['descricao']}} </p>
    <a href="#" class="btn btn-primary">{{$tarefa['finalizado']}}</a>
  </div>
</div>


@endsection
