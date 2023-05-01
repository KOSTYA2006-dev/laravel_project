<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MyController extends Controller
{
    public function index(){
        
        return view('index');

    }
    public function info(){
        $data = User::where("id", 1)->count();
        return view('info', ['data' => $data]);
    }
    
}
