@extends('layouts.principal')
        <script src="{{asset('js/app.js')}}"></script>

        <script>
          $(document).ready(function(){


          $('.ativo, .inativo').click(function(){
              //$('.xedit').
            $(this).toggleClass("ativo");
            $(this).toggleClass("inativo");
            });






          })

        </script>

@section('menu')

@section('content')

<h1>Lista de Tarefas</h1>
<table id="editavel" class="table">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Título</th>
      <th scope="col">Descrição</th>
      <th scope="col">Status</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>

        @foreach ($tarefas as $tarefa)
    <tr>
     <td>  {{$tarefa['id']}} </td>
          <td>  {{$tarefa['titulo']}} </td>
          <td>  {{$tarefa['descricao']}} </td>

          <td>  {{$tarefa['finalizado']}} </td>
     <td>
          {{$tarefa['finalizado'] ?  'ae' : 'falsao'}}
         <a href="#" class="ativo">Finalizado</a>
          <a href="#" class="inativo">Em Andamento</a>
         <a href="{{ route('tarefas.show', $tarefa['id']) }}">Detalhar</a>
          |
          <a href="{{ route('tarefas.edit', $tarefa['id']) }}">Editar</a>
     </td>
    </tr>
        @endforeach


</table>
@endsection


<script>




</script>
