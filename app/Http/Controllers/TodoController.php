<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todo = Todo::all();


        return view('todos.todo')->with('todos', $todo);
    }


    public function show($id)
    {
        $todo_id = Todo::find($id);

        return view('todos.singleTodo')->with('todo', $todo_id);
    }

    public function create()
    {
        return view('todos.createTodo');
    }

    public function addTodo(request $req)
    {

        $req->validate([

            "name" => "required|min:3",
            "description" => "required"
        ]);


        $todo = new Todo();

        $todo->name = $req->input('name');
        $todo->description = $req->input('description');
        $todo->completed = false;
        $todo->save();

        session()->flash("success", "Hurry!  Added Successfully.. ");

        return redirect('/todo');
    }

    public function edithForm($edith_id)
    {
        $todo = Todo::find($edith_id);

        return view('todos.edith')->with('todo', $todo);
    }

    public function SubmitEdith(request $req, $id)
    {
        $req->validate([

            "name" => "required|min:6|max:12",
            "description" => "required"
        ]);

        $todo = Todo::find($id);

        $todo->name = $req->name;
        $todo->description = $req->description;
        $todo->completed = false;
        $todo->save();
        session()->flash("success", "Hurry!  Edited Successfully.. ");
        return redirect('/todo');
    }


    public function deleteTodo($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        session()->flash("success", "Todo  Deleted Successfully.. ");
        return redirect("/todo");
    }


    public function task(request $req, $id)
    {
        $todo = Todo::find($id);
        $todo->completed = true;
        $todo->save();
        session()->flash("success", "Todo  Completed Successfully.");
        return redirect("/todo");
    }
}