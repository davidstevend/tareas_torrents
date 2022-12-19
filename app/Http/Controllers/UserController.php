<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    {

        $users = User::select('id','name','last_name','phone','email','status')
            ->orderBy('id', 'ASC')
            ->get();

            $users->toJson();

        return view('users.index', compact('users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
       
    }

    public function edit(User $user)
    {
        // dd($user);
        return view('users.edit', compact('user'));
       
    }
    
    public function store(Request $request)
    {
        $User = new User;
        $User->role_id             =  1; // role_id (1) por defecto en la aplicacion es (Admin) - (2) (Usuario)
        $User->name                =  $request->name;
        $User->last_name           =  $request->last_name;
        $User->phone               =  $request->phone;
        $User->email               =  $request->email;       
        $User->password            =  Hash::make('12345678');     
        $User->status              =  $request->status;       
        $User->save();

        return redirect()
    	->route('users.index')
    	->with('info', 'Usuario creado con Exito; Clave temporal ( 12345678 )');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        return $User;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $User)
    {
        // $User->update($request->all());

        $Usera = User::find($User->id);
        $User->name                =  $request->name;
        $User->last_name           =  $request->last_name;       
        $User->phone               =  $request->phone;       
        $User->email               =  $request->email;       
        $User->status              =  $request->status;       
        // $User->password            =  Hash::make($request['password']);     
        $User->save();

        return redirect()
    	->route('users.index')
    	->with('info', 'Usuario Actualizado con Exito!!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $User)
    {

        $User->status = FALSE;
        $User->save();

        return redirect()
    	->route('users.index')
    	->with('info', 'Usuario Desactivado con Exito!!!');
    }
}
