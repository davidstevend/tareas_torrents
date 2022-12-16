<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function __construct()
    {
      //con este metodo, no se da acceso al controlador si el 
      //usuario no esta logueado
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $search = $request->search;

        $tasks = Task::orderBy('id','desc')
        
        ->where([['task', 'LIKE', '%' . $search . '%'],['user_id',  '=',Auth::User()->id]])
        ->orwhere([['description', 'LIKE', '%' . $search . '%'],['user_id',  '=',Auth::User()->id]])
        ->get();

   

// dd('sd');
        return $tasks; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task;
        $task->task                =  $request->task;
        $task->description         =  $request->description;
        $task->date                =  now();
        $task->expiration_date     =  $request->expiration_date;
        $task->user_id             =  Auth::user()->id;
        $task->finished            =  $request->finished;
        $task->save();

        return "guardada";
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return $task;        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        // $task->update($request->all());

        $taska = Task::find($task->id);
        $taska->task                =  $request->task;
        $taska->description         =  $request->description;
        // $taska->date                =  now();
        $taska->expiration_date     =  $request->expiration_date;
        // $taska->user_id             =  Auth::user()->id;
        $taska->finished            =  $request->finished;
        $taska->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
       
        $task->delete();
    }
}
