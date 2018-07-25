<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Image;
use File;

class EmpresasController extends Controller
{
    public function index() {
        $users = User::all();
        $todas = User::all()->count();
    
    return view ('admin.empresas.index', ['users' => $users, 'todas' => $todas]);

}
	public function create () {
		return view ('admin.empresas.create');
    }
	public function store(Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->cnpj = $request->cnpj;
        $user->endereco = $request->endereco;
        $user->telefone = $request->telefone;
        $user->atuacao = $request->atuacao;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();
        return redirect('empresas');

    }
    
	 public function edit() {
        $users = User::find($id);
        return view ('admin.empresas.edit', [ 'users' => $users]);
}
	 public function update(Request $request, $id) {
         $this->validate($request, [
            'name'    =>  'required',
            'cnpj'     =>  'required',
            'endereco'     =>  'required',
            'telefone'     =>  'required',
            'atuacao'     =>  'required',
            'email'     =>  'required',
            'password'     =>  'required'
        ]);
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->cnpj = $request->get('cnpj');
        $user->endereco = $request->get('endereco');
        $user->telefone = $request->get('telefone');
        $user->atuacao = $request->get('atuacao');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->save();
        return redirect()->route('empresas')->with('success', 'Empresa Editada');
    }

        public function profile(){
        
        return view('admin.perfil.profile', array('user' => Auth::user()) );
    }

         public function update_avatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('admin.perfil.profile', array('user' => Auth::user()) );

    }




        public function destroy($id)
    {
        $del = User::find($id);
        $del->delete();
        return redirect('empresas');
    }


}
