<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Type\Integer;

class Coments extends Controller
{
    public function postComent(Request $request){
        
        $first = Auth::user()->id;
            $first1 = Auth::user()->name;
            
            $first2 = Auth::user()->patronymic;
            $fio_first = ($first1 .' '. $first2);
        $user = str($fio_first);
        
        
        comments::Create([
            'user_id' => $user,
            'post_id' => $request->post_id,
            'message' => $request->message
            
            
            // 'description' => $request->description,
        ]);
        return redirect('/posts');
    }
}
