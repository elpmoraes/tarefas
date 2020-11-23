@extends('layouts.principal')


@section('title', 'Listando')

@section('menu')

@section('content')

<div class="card text-white bg-secondary mb-4">
    <h3>Nova Tarefa</h3>
<form action="{{ route('tarefas.update',$tarefa->id) }}" method="post">
    <div class="form-group">
    @csrf
    {{ method_field('PUT') }}
 <label for="titulo">Titulo</label>
        <input type="text" class="form-control" name="titulo" id="titulo" value="{{$tarefa->titulo}}">

        <label for="descricao">Descrição</label>
        <input type="text" class="form-control" name="descricao" id="descricao" value="{{$tarefa->descricao}}">

 <div class="form-check">
    <input type="checkbox" {{ $tarefa['finalizado'] ? 'checked' : '' }} class="form-check-input" name ="finalizado" id="finalizado">
<label for="finalizado">Finalizado</label>
 </div>
</div>
        <input type="submit" class="btn btn-primary mb-2" value="Salvar">

</form>
</div>
@endsection
