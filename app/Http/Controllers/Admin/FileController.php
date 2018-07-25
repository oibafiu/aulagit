<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\File;
use Illuminate\Support\Facades\Storage;
use DB;
use App\User;

class FileController extends Controller
{
    public function index() {
    $docs = File::all()->count();
    $files = File::orderBy('created_at', 'DESC')->paginate(30);
    return view('admin.file.index', ['files' => $files, 'docs' => $docs]);
}
	public function create() {
        $users = User::all();
		return view('admin.file.upload', ['users' => $users]);
	}
	public function store(Request $request) {
		
        $files = $request->file('file');
        $file = $request->user_id;
        $documento = $request->documento;
        $user_id = $request->user_id;
        

        foreach ($files as $file) {

            //dd($file->store('public'));

            File::create([
                'nome' => $file->getClientOriginalName(),
                'user_id' => $user_id,
                'documento' => $documento,
                'path' => $file->store(
    'uploads/'. $request->user()->name)
            ]);
        }
        return redirect('/documentos');
    }
    
	public function show($id)
    {
        $dl = File::find($id);
        return Storage::download($dl->path, $dl->nome);
    }
     public function destroy($id)
    {
        $del = File::find($id);
        Storage::delete($del->path);
        $del->delete();
        return redirect('documentos');
    }
  }

