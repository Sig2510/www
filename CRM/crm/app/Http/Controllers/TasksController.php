<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Tasks;
use App\Http\Resources\task as TaskResource;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get articles

        $tasks = tasks::paginate(15);

        // Return collection of tasks as a resorce

        return TaskResource::collection($tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = $request->isMethod('put') ? Tasks::findOrFail($request->task_id) : new Tasks;

        $task->id = $request->input('task_id');
        $task->tasks = $request->input('tasks');
        $task->assigned_to = $request->input('assigned to');
        $task->status = $request->input('status');

        if($task->save()){
            return new TaskResource($tasks);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get Task
        $task = Tasks::findOrFail($id);

        // Return Single Task as a resource
        return new TaskResource($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // Get Task
      $task = Tasks::findOrFail($id);

      if($task->delete())
        {
      return new TaskResource($task);
        }
    }
}
