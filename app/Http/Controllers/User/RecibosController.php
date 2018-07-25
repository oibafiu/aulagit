<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Recibo;
use PDF;

class RecibosController extends Controller
{
    
    public function index(){
    	$recibos = Recibo::all();
		return view('user.recibos.index', ['recibos' => $recibos]);
	}
	public function generate_pdf() {

    $recibos = Recibo::all();
	$pdf = PDF::loadView('admin.recibos.index', ['recibos' => $recibos]);
	 return $pdf->download('recibo.pdf');
	}
}
