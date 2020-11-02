<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefas;
class TarefasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefas::all();
        
        return view('tarefas.index')->with('tarefas', $tarefas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('tarefas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarefa = new Tarefas();
        $tarefa->titulo = $request->input('titulo');
        $tarefa->descricao = $request->input('descricao');
        $tarefa->finalizado = 0;
        $tarefa->save();
 
        return redirect()->route('tarefas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarefa = Tarefas::find($id);
        return view('tarefas.show')->with('tarefa', $tarefa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $tarefa = Tarefas::find($id);
  
        if(isset($tarefa)){
            return view('tarefas.edit')->with('tarefa',$tarefa);
        }else
        return \redirect('/tarefas');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarefa = Tarefas::find($id);
       
        if(isset($tarefa)){
           
            $tarefa->titulo = $request->input('titulo');

            $tarefa->descricao = $request->input('descricao');
            if($request->has('finalizado')) {
                $tarefa->finalizado = 1;
            }else{
                $tarefa->finalizado = 0;
            }
            $tarefa->save();
            return \redirect('/tarefas/'.$id);
        }else
        return \redirect('google.com');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
