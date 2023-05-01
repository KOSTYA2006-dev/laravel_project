<?php

namespace App\Http\Controllers;
use App\Models\Articals;
use App\Models\User;
// use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Post_uchenik extends Controller
{
    public function postArticals(){

        return view('post_artical.post');
    }
    public function PostUchenik(Request $request, $id){

        $this->validate($request, [
            "artical_name" => "required",
            "artical_description" => "required",
            "cost" => "required",
            "previu_img" => "image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "colledj" => "required",
            "begin" => "required",


        ]);
        

      if($request->previu_img){
            $fileNameWithExt = $request->file('previu_img')->getClientOriginalName();
            

            $path = $request->file('previu_img')->storeAs('public/img', $fileNameWithExt);
            $img = $request->previu_img->getClientOriginalName();
      }
      else{
        $img = '';
      }
            
            $first = Auth::user()->id;
            $first1 = Auth::user()->name;
            $first2 = Auth::user()->surname;
            $first3 = Auth::user()->patronymic;
            $fio_first = ($first1 .' '. $first2 . ' ' . ' ' . $first3);
            
        Articals::Create([
            'id_user' => $first,
            'fio' => $fio_first,
            'artical_name' => $request->artical_name,
            'artical_description' => $request->artical_description,
            'topic' => $request->cost,
            'previu_img' => $img,
            'colledj' => $request->colledj,
            'begin' => $request->begin,
            
            // 'description' => $request->description,
        ]);
        User::where('id', $id)->increment('exp');
        return redirect('/posts');

    }

}
