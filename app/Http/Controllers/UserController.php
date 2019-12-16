<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('shares.search');
    }
    public function search(Request $request){
        $user_id = $request->user_id;
        $name = $request->name;
        $class = $request->class;


        $result = User::where('user_id', 'like', "%$user_id%" )
                        ->Where('name', 'like', "%$name%")
                        ->Where('class', 'like', "%$class%")
                        ->orderBy('user_id','DESC')
                        ->get();
        return view('shares.user', compact('result'));
    }

    // task2
    public function show(){
        return view('orm.search02');
    }

    public function searchUser(){

    }
}
