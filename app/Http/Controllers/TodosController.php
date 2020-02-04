<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('todos.index')->with('todos', $todos);
    }

    public function show($todoId){
        $todo = Todo::find($todoId);

        return view('todos.show')->with('todo', $todo);
    }

    public function create(){
        return view('todos.create');
    }

    public function store(){
        //dd(request()->all());
        $this->validate(request(),[
            'name' => 'required|max:25',
            'description' => 'required|max:200'
        ]);
        $data = request()->all();

        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        return redirect('/todos');
    }
}
