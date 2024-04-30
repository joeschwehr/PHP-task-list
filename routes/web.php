<?php

use App\Http\Requests\TaskRequest;
use \App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return redirect('tasks');
});

Route::get('/tasks', function () { 
    return view('index', ['tasks' => Task::latest()->paginate(10)]);
})->name('tasks.index');

Route::view('tasks/create', 'create')->name('tasks.create');

Route::get('tasks/{task}', function (Task $task) {
    return view('show', ['task' => $task]);
})->name('tasks.show');

Route::get('tasks/{task}/edit', function (Task $task) {
    return view('edit', ['task' => $task]);
})->name('tasks.edit');

Route::post('/tasks', function (TaskRequest $request) {
    
    // $task = new Task;
    // $task->title = $data['title'];
    // $task->description = $data['description'];
    // $task->long_description = $data['long_description'];

    $data = $request->validated();
    $task = Task::create($data);

    $task->save();

    return redirect()->route('tasks.show', [$task->id])->with('success', 'Task created successfully!');
})->name('tasks.store');

Route::put('/tasks/{task}', function (Task $task, TaskRequest $request) {
    $task->update($request->validated());

    return redirect()->route('tasks.show', ['task' =>$task->id])->with('success', 'Task updated successfully!');
})->name('tasks.update');

Route::put('/tasks/{task}/toggle-complete', function (Task $task) {
    $task->toggleComplete();
    return redirect()->back()->with('success', 'Task status updated successfully!');
})->name('tasks.toggle-complete');

Route::delete('/tasks/{task}', function (Task $task) {
    $task->delete();

    return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
})->name('tasks.destroy');

Route::fallback(function () {
    return '404 Page';
});
