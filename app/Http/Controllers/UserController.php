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
    public function index(Request $request)
    {

        $search = $request->search;


        $users = User::where('name', 'LIKE', '%' . $search . '%')
            ->orwhere('email', 'LIKE', '%' . $search . '%')
            ->orderBy('id', 'ASC')
            ->get();

        return $users;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $User = new User;
        $User->name                =  $request->name;
        $User->email               =  $request->email;       
        $User->password            =  Hash::make($request['password']);     
        $User->save();

        return "Creado con exito";
       
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
        $User->email               =  $request->email;       
        $User->password            =  Hash::make($request['password']);     
        $User->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $User)
    {

        $User->delete();
    }
}
