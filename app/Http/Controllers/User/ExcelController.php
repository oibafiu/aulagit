<?php

namespace App\Http\Controllers\User;

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
       
	
  $entradas = Entradas::all();

	(new FastExcel($entradas))->export('entradas.xlsx');
  
    return (new FastExcel(Entradas::all() ))->download('entradas.xlsx');
    
   }

   
  }

