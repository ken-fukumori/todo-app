<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::all();

        return view('todo',[
            'todos' => $todos,
        ]);
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->detail = $request->detail;
        $todo->save();

        return redirect('/');
    }

    public function edit($id){
        $todo = Todo::find($id);
        return view('edit',['todo' => $todo]);
    }

    public function update(Request $request, $id) {
        $todo = Todo::find($id);
        $todo->title = $request->title;
        $todo->detail = $request->detail;
        $todo->save();

        return redirect('/');
    }

    public function delete($id) {

        $todo = Todo::find($id);
        $todo->delete();
        
        return redirect('/');
    }
}
