<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Rap2hpoutre\FastExcel\FastExcel;
use App\User;
use App\Entradas;
use collection;
use File;
use Storage;
use Input;
use DB;
use Session;
use App\Recibo;


class ExcelController extends Controller
{

    public function index()
    {
       
	$users = User::all();
  $recibos = Recibo::all();

	(new FastExcel($users, $recibos))->export('usuarios.xlsx');
  
    return (new FastExcel(User::all(), Recibo::all() ))->download('usuarios.xlsx');
    
   }

   public function create()
    {
    	$users = User::all();
       
	return view('admin.relatorios.create', ['users' => $users]);
   }
   public function store(Request $request){
     $entrada = new Entradas;
        $entrada->mes = $request->mes;
        $entrada->valor_entrada = $request->valor_entrada;
        $entrada->valor_saida = $request->valor_saida;
        $entrada->cliente = $request->cliente;
        $entrada->save();
        return redirect('admin');
    }
  }

