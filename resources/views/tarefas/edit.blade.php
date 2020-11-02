<h3>Novo Cliente</h3>

<form action="{{ route('tarefas.update',$tarefa->id) }}" method="post">
    @csrf
    {{ method_field('PUT') }}
    Titulo
        <input type="text" name="titulo" id="titulo" value="{{$tarefa->titulo}}">
        Descricao
        <input type="text" name="descricao" id="descricao" value="{{$tarefa->descricao}}">

        <input type="checkbox" id="finalizado" name="finalizado" value="{{$tarefa->finalizado}}">
        <label for="finalizado">Finalizado</label><br>
        <input type="submit" value="Salvar">

</form>