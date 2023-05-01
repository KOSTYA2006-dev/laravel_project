<?php

namespace App\Http\Controllers;
use App\Models\Articals;
use Illuminate\Http\Request;
use App\Models\comments;

class Myposts extends Controller
{
    public function myposts(){
        return view('content.home', ['data' => Articals::all()]);
    }

    public function search(Request $request){

        $search2 = $request -> search;
        $packet = Articals::where('artical_name', 'LIKE', "%{$search2}%")->orderBy('artical_name')->paginate(10);
        return view('content.home', ['data' => $packet]);

    }
    public function katalog($katalog){

    
        $packets = Articals::where('colledj', $katalog)->orderBy('colledj')->get();
        return view('content.home', ['data' => $packets]);
    
    }
    public function destroy($id)
    {
        Articals::where('id', $id)->delete();
    
        return redirect()->route('posts')
             ->withSuccess(__('Post delete successfully.'));
    }
public function textID($id){



    // $search2 = $request -> search;
    $text_user = Articals::where('id', $id)->orderBy('artical_name')->paginate(10);
    
    $message_user = comments::where('post_id', $id)->get();
    // if ($message_user->post_id == $id){
       
    // }
    
    
    return view('content.text', ['data' => $text_user, 'message'=> $message_user]);
}


}

