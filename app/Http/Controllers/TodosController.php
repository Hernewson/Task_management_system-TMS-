<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){


        $todos =Todo::orderBy('id', 'desc')->paginate(10);
        return view('todos.index') -> with('todos', $todos);

        // return view('todos.index') -> with('todos', Todo::all());


    }

    public function show(Todo $todo){
        return \view(' todos/show ')->with('todo', $todo);

    }

    public function create(){
        return view('todos/create');
    }

    public function store(){

        $this -> validate(request(), [
            'title' => 'required | min:6 | max: 30',
            'description' => 'required'
        ]);

        $data = \request()->all();

        $todo = new Todo();
        $todo -> title = $data['title'];
        $todo -> description = $data['description'];
        $todo -> completed = false;
        $todo -> save();

        session()->flash('success', 'Task created successfully.');

        return \redirect('/todos');
    }

    public function edit(Todo $todo){
        return \view('todos.edit')->with('todo', $todo);
    }

    public function update($todoID){
        $this -> validate(request(), [
            'title' => 'required | min:6 | max: 30',
            'description' => 'required'
        ]);

        $data = \request()->all();

        $todo = Todo::find($todoID);
        $todo->title = $data['title'];
        $todo->description = $data['description'];

        $todo->save();

        session()->flash('update', 'Task updated successfully.');


        return \redirect('/todos');
    }

    public function destroy(Todo $todo){
        $todo -> delete();

        session()->flash('delete', 'Task deleted successfully.');


        return \redirect('/todos');
    }

    public function complete(Todo $todo){
        $todo -> completed = true;
        $todo -> save();

        session()->flash('complete', 'This Task is completed');
        return \redirect('/todos');
    }

    public function completed(){

        $todos =Todo::orderBy('id', 'desc')->paginate(10);
        return \view('todos.completed')->with('todos', $todos);

    }

    public function rollback(Todo $todo){
        $todo -> completed = false;
        $todo -> save();

        session()->flash('rollback', 'This Task is undone.');
        return \redirect('/completed');

    }
}
