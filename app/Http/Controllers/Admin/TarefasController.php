<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tarefa;
use Auth;

class TarefasController extends Controller
{
    public function index() {
        $tarefas = Tarefa::all();
        $tar = Tarefa::all()->count();
        return view('admin.tarefa.index', ['tarefas' => $tarefas, 'tar' => $tar]);
     }
     public function show() {
        $tarefas = Tarefa::all();
        $tar = Tarefa::all()->count();
        return view('admin.tarefa.show', ['tarefas' => $tarefas, 'tar' => $tar]);
     }


    public function store(Request $request) {
        $tarefa = new Tarefa;
        $tarefa->nome = $request->nome;
        $tarefa->descricao = $request->descricao;
        $tarefa->save();
        return redirect('admin');
    }
     public function create() {
     	return view('admin.tarefa.index');
     }
     public function destroy($id)
    {
        $del = Tarefa::find($id);
        $del->delete();
        return redirect('admin');
    }


}
