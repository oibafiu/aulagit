<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\File;
use Auth;
use App\User;


class FileController extends Controller
{

    
public function index(Request $request)
	{
		
      $files = File::orderby('user_id')->paginate(30);
    return view('user.docs.index', ['files' => $files]);

	}

	public function show(){

        $dl = File::find($id);
        return Storage::download($dl->path, $dl->nome);
    
	}
	public function view(){
		$files = File::all();
		return view('user.docs.show',['files' => $files]);
	}
}
