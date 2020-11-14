@extends('layouts.principal')


@section('title', 'Listando')

@section('menu')

@section('content')
<h1>Nova Tarefa</h1>

<form
action="{{ route('tarefas.store') }}"
method="post">
    @csrf
     <div class="form-group col-4">
    <label for="titulo">Título</label>
        <input class="form-control" type="text" name="titulo" id="titulo">
     </div>
          <div class="form-group col-4">
        <label for="descricao">Descrição</label>
        <input class="form-control" type="text" name="descricao" id="descricao">
          </div>
                <div class="form-group col-3">
        <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
</form>

@endsection
