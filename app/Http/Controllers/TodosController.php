<?php

namespace App\Http\Controllers;

use App\Todo;
use Exception;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        // Fetch all rows from the todo's table from mySQL
        $todos = Todo::all(); // From the Todo's table
        return view('todos.index')->with('todos', $todos);
    }

    public function show(Todo $todo)
    {
        return view('todos.show')->with('todo', $todo);
    }

    public function create()
    {
        return view('todos.create');
    }

    /*
     * @throws Exception
     */
    public function store()
    {

        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required'
        ]);

        $data = request()->all();
        $todo = new Todo(); // New Todo Model
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');

    }

    /*
     * Handles routing to the Edit page.
     */
    public function edit(Todo $todo)
    {
        return view('todos.edit')->with('todo', $todo);
    }

    /*
     * Handles mySQL update.
     */
    public function update(Todo $todo)
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required'
        ]);

        $data = request()->all();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        return redirect('/todos');
    }

    public function destroy(Todo $todo)
    {
        $todo = Todo::find($todo);

        $todo->delete();
        return redirect('/todos');
    }
}
