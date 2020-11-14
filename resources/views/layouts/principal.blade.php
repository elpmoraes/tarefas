<html>
    <head>

        <title>Tarefas - @yield('title')</title>
    {{-- asset vai buscar na pasta public do laravel
        app.css é o bootstrap --}}
     <script src="{{asset('js/app.js')}}"></script>
        <link href={{ asset('/css/app.css') }}  type="text/css" rel="stylesheet" >
        <link href={{ asset('/css/principal.css') }}  type="text/css" rel="stylesheet" >

</head>
    <body>
        @section('menu')
        <nav class="navbar navbar-expand-lg bg-dark">
  <a class="navbar-brand" href="{{ route('tarefas.index')}}">Tarefas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('tarefas.index')}}">Lista de Tarefas <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('tarefas.create')}}">Nova Tarefa</a>
      </li>

    </ul>
  </div>
</nav>


        <div class="container">

            @yield('content')
        </div>
    </body>
</html>
