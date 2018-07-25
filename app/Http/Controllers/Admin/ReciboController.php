<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Recibo;
use PDF;
use Storage;
use Carbon\Carbon;

class ReciboController extends Controller
{
    public function index(){
		return view('admin.recibos.show');
	}

	 public function store(Request $request) {
        $recibo = new Recibo;
        $recibo->empresa = $request->empresa;
        $recibo->data = $request->data;
        $recibo->valor = $request->valor;
        $recibo->referente = $request->referente;
        $recibo->save();
        return redirect('todos');;
    }


    public function generate_pdf() {

    $recibos = Recibo::all();
	$pdf = PDF::loadView('admin.recibos.index', ['recibos' => $recibos]);
	 return $pdf->download('recibo.pdf');
}

public function create(){
	 $users = User::all();
	 $recibos = Recibo::all();
	return view('admin.recibos.create', ['users' => $users, 'recibos' => $recibos]);
}
public function show(){
   
	 $users = User::all();
	 $recibos = Recibo::all();
	return view('admin.recibos.show', ['users' => $users, 'recibos' => $recibos]);
}

}
