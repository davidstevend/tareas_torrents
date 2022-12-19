<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function index()
    {
        if(Auth::user()->isAdmin()){

            $tasks = DB::table('tasks as tas')
            ->join('users as us', 'tas.user_id', '=', 'us.id')           
            ->select('tas.*', 'us.name', 'us.last_name')            
            ->get();

        }else{

            $tasks = Task::whereUserId(Auth::user()->id)->orderBy('id','desc')->get();
        }
        $tasks->toJson();
        
         return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
       
    }

    public function edit(Task $task)
    {
        // dd($user);
        return view('tasks.edit', compact('task'));
       
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

        return redirect()
    	->route('tasks.index')
    	->with('info', 'Tarea Creada con Exito');
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
        $task->update($request->all());

        // $taska = Task::find($task->id);
        // $taska->task                =  $request->task;
        // $taska->description         =  $request->description;
        // // $taska->date                =  now();
        // $taska->expiration_date     =  $request->expiration_date;
        // // $taska->user_id             =  Auth::user()->id;
        // $taska->finished            =  $request->finished;
        // $taska->save();

        return redirect()
    	->route('tasks.index')
    	->with('info', 'Tarea Actualizada con Exito!!!');

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
        return redirect()
    	->route('tasks.index')
    	->with('info', 'Tarea Eliminada correctamente.');
    }
}
