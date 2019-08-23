<?php

namespace App\Http\Controllers;

use Session;
use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function displayAll()
    {
        $todos = Todo::all();


        return view('todos')->with('todos', $todos);
    }
    public function store(Request $request)
    {
        $todo = new Todo;
        $todo->todo = $request->newTodo;
        $todo->save();
        Session::flash('success','Todo Successfully Created');
        return redirect()->back();
    }
    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        Session::flash('success','Todo Successfully Deleted');
        return redirect()->back();
    }
    public function update($id)
    {
        $todo = Todo::find($id);
        return view('update')->with('todo', $todo);
    }
    public function save(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->todo = $request->todo;
        $todo->save();
        Session::flash('success','Todo Successfully Updated');
        return redirect()->route('todos.open');
    }
    public function completed($id)
    {
        $todo = Todo::find($id);
        $todo->completed = true;
        $todo->save();
        Session::flash('success','Todo Marked as Completed');
        return redirect()->back();
    }
}
