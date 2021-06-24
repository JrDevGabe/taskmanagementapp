<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    /**
     * Retrieve all the tasks and order them by piority
     * 
     */
    public function index()
    {
        $tasks = Task::orderBy('order', 'asc')->get();

        return ('tasks.index')->view('tasks', $tasks);
    }
    /**
     * Reorder tasks by the desired user's task
     * 
     */
     public function reOrder(Request $request, $id)
    {
        $this->validate($request
            [
                'tasks.*.order' => 'required|numeric'
            ]);
        $task = Task::all();

        foreach ($tasks as $task) {
            foreach ($request->tasks as $newTasks) {
                if ($taskNew['id'] == $id) {
                    $task->update(['order' => $taskNew['order']]);
                }
            }
        }
    }
    /**
     * Redirects user to the tasks creation page
     * 
     */
    public function create()
    {
        return view('tasks.create');
    }
    /**
     * Redirects user to the tasks editing page
     * 
     */
    public function edit(Task $task)
    {
        return view('tasks.edit')->with('task', $task);
    }

    /**
     *Updates Task Information
     * 
     */

    public function update(Task $task)
    {
        $this->validate(request(), [
            'name' => 'required',
        ]);
        $data = request()->all();

        $task->name = $data['name'];
        $task->piority = $data['description'];
        $task->save();

        return redirect('/tasks');
    }
    /**
     * Deletes Tasks
     * 
     */
    public function destory(Task $task)
    {
        $task-> delete();
        return redirect('/tasks');
    }
    /**
     * Store task in the database
     * 
     */
    public function store(){

       $this->validate(request(), [
        'name' => 'required',
       ]); 
        $data = request()->all();
        $task = new Task();

        $task->name = $data['name'];
        $task->piority = $data['piority'];
        $task->save();
        return redirect('/tasks');
    }
}
