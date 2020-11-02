<h3>Novo Cliente</h3>

<form action="{{ route('tarefas.update', '$tarefa->id') }}" method="post">
    @csrf
        
        <input type="text" name="titulo" id="titulo" value="{{$tarefa->titulo}}">
        <input type="text" name="descricao" id="descricao" value="{{$tarefa->descricao}}">

        <input type="text" name="finalizado" id="finalizado" value="{{$tarefa->finalizado}}">

        <input type="submit" value="Salvar">

</form>