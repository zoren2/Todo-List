<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        // Fetch all rows from the todo's table from mySQL
        $todos = Todo::all(); // From the Todo's table
        return view('todos.index')->with('todos',$todos);
    }
}
