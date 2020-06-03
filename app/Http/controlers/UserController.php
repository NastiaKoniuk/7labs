<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Data;

class UserController extends Controller
{
    public function run(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->second_name = $request->input('second-name');

        $user->save();
    }

    public function getUser(){
        $user = User::all();
        $data = Data::all();
        return view('data',['users'=>$user,'data'=>$data]);
    }

}
