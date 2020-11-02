<h3>Novo Cliente</h3>

<form action="{{ route('tarefas.store') }}" method="post">
    @csrf
        <input type="text" name="titulo" id="titulo">
        <input type="text" name="descricao" id="descricao">
        <input type="submit" value="Salvar">

</form>