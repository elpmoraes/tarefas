<h3>Novo Cliente</h3>

<form action="{{ route('tarefas.store') }}" method="post">
    @csrf
        <input type="text" name="nome" id="nome">
        <input type="submit" value="Salvar">

</form>