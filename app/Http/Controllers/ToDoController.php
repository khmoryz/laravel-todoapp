<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index()
    {
        $todos = ['ショッピング', 'お昼ご飯', '散歩'];
        return view('index', ['todos' => $todos]);
    }

    public function post(Request $request){
        $msg = $request->msg;
        $data = [
            'msg' =>'こんにちは' . $msg . 'さん！',
        ];
        return view('index', $data);
    }
}
