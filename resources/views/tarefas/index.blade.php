<a href="{{ route('tarefas.create')}}">NOVA TAREFA</a>

<ol>
        @foreach ($tarefas as $tarefa)
        <li>
            {{$tarefa['nome']}}   | <a href="{{ route('tarefas.show', $tarefa['id']) }}">Detalhar</a> | <a href="{{ route('tarefas.edit', $tarefa['id']) }}">Editar</a>
        </li>
        @endforeach

</ol>