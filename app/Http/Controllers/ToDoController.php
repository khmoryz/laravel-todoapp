<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;
use Illuminate\Support\Facades\Auth;

class ToDoController extends Controller
{
    public function index(Request $request)
    {
        // 認証周り
        $user = Auth::user();
        $todos = ToDo::All();
        $param = ['todos' => $todos, 'user' => $user];

        return view('index', ['param' => $param]);
    }

    public function create(Request $request)
    {
        $todo = new ToDo;
        $item = $request->item;
        $todo->item = $item;
        $todo->save();
    }

    public function delete(Request $request)
    {
        $todo = new ToDo;
        $todo->find($request->id)->delete();
        return redirect('/todo');
    }
}
