<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\File;
use App\Tarefa;

class AdminController extends Controller
{
    public function index()
    {
    	$todas = User::all()->count();
    	$users = User::all();
        $tarefas = Tarefa::all();
        $docs = File::all()->count();
    	return view('admin.home', ['users' => $users, 'todas' => $todas, 'tarefas' => $tarefas, 'docs' => $docs]);
    }
    public function __construct()
    {
        $this->middleware('admin');
    }
}
