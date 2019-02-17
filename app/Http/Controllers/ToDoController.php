<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;

class ToDoController extends Controller
{
    public function index()
    {
        $todos = ToDo::all();
        return view('index', ['todos' => $todos]);
    }

    public function post(Request $request){
        $item = $request->item;
        $data = [
            'msg' =>'こんにちは' . $msg . 'さん！',
        ];
        return view('index', $data);
    }
}
