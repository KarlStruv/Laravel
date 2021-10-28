<?php

namespace App\Http\Controllers\Tasks;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TasksController extends Controller
{

    public function index()
    {
        return view('tasks.index');
    }

    public function showStoreForm()
    {
        return view('tasks.store');
    }

    public function store()
    {
        //
    }

    public function showEditForm()
    {
        return view('tasks.edit');
    }

    public function edit($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
