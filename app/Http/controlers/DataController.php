<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class DataController extends Controller
{
    public function run(Request $request){
        $data = new Data();
        $data->name = $request->input('name');
        $data->second_name = $request->input('second-name');
        $data->message = $request->input('message');
        $data->user_id = $request->input('user_id');

        $data->save();
    }

    public function getData(){
        $data = new User;
        return view('data',['data' => $data->posts()->get()]);
    }
}
