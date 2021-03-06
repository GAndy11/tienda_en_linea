<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //All not admin users 
        $users = User::with('roles')
            ->doesntHave('roles')
            ->get(); 

        return view('users.list', [
            'users' => $users
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $user = User::findOrFail($id); //Traer el usuario de BD

        //Estados estaticos del usuario
        $states = [
            1 => "Activo",
            0 => "Inactivo"
        ];

        foreach ($states as $key => $value) {
            if($user->state == $key ){
                $user->stateName = $value;   
            }
        }

        return view('users.show', [
            'user' => $user,
            'states' => $states
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $user = User::findOrFail($id); //Traer el usuario de BD

        //Estados estaticos del usuario
        $states = [
            1 => "Activo",
            0 => "Inactivo"
        ];

        return view('users.edit', [
            'user' => $user,
            'states' => $states
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        //Validaciones
        $validData = $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        $user = User::findOrFail($id);
        $user->name = $validData['name'];
        $user->email = $validData['email'];
        $user->state = $request->get('state');
        $user->save();

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        //
    }
}
