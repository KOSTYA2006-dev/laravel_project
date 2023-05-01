<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{

    public function profil($id){
        if (Auth::check()) {
            $profil_user = User::where('id', $id)->get();
            return view('profil.profile', ['data'=> $profil_user]);
        }
        else{
            return redirect('/register');
        }
        

    }
    public function avatar(Request $request, $id){
        $this->validate($request, [
            
            "img_avatar" => "image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            


        ]);
        if($request->img_avatar){
            $fileNameWithExt = $request->file('img_avatar')->getClientOriginalName();
            

            $path = $request->file('img_avatar')->storeAs('public/imgavatar', $fileNameWithExt);
            $img = $request->img_avatar->getClientOriginalName();
      }
      else{
        $img = '';
      }
      $text_user = User::where('id', $id)->update(['my_img' => $img]);
      
      return redirect()->to('profil'.$id);

    }
}
