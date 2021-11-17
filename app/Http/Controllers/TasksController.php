<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        return view('components.index', ['components' => Task::all()]);
    }

    public function create()
    {
        return view('components.create');
    }

    public function store(TaskRequest $request): RedirectResponse
    {
        (new Task([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ]))->save();
        return redirect()->route('components.index');
    }


    public function edit(Task $task)
    {
        return view('components.edit', ['task' => $task]);
    }

    public function update(TaskRequest $request, Task $task): RedirectResponse
    {
        $task->update([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
        ]);
        return redirect()->route('components.edit', $task);
    }

    public function destroy(Task $task): RedirectResponse
    {
        $task->delete();
        return redirect()->route('components.index');
    }

    public function complete(Task $task): RedirectResponse
    {
        $task->toggleComplete();
        $task->save();
        return redirect()->back();
    }
}
