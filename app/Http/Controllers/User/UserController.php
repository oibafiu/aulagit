<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use File;
use App\User;

class UserController extends Controller
{
    public function profile(){
        
        return view('user.perfil.profile', array('user' => Auth::user()) );
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

        return view('user.perfil.profile', array('user' => Auth::user()) );

    }




        public function destroy($id)
    {
        $del = User::find($id);
        $del->delete();
        return redirect('empresas');
    }
}
