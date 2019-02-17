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
