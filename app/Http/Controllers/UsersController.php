<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {

        $roles = Role::all();
        return view('users.create', compact('roles'))->with('success', "L'enregistrement a été effetué avec succés!");
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('users.edit', compact('user','roles'));
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'date_naiss'=>$request->date_naiss,
            'lieu_naiss_'=>$request->lieu_naiss,
            'sexe'=>$request->sexe,
            'profession'=>$request->profession,
            'adresse'=>$request->adresse,
            'telephone'=>$request->telephone
        ]);
        $user->syncRoles($request->roles);
        return redirect(route('users.index'))->with('success', 'La modification a été effetué avec succés!');
    }

    public function destroy($id)
    {
        $user = Auth::user();
        if ($id == $user->id) { echo 'Vous ne pouvez pas supprimer votre propre compte, Désolé!!!'; }
        else {

            User::destroy($id);
            return redirect(route('users.index'));
        }
    }

    public function profile()
    {
        $users = User::all();
        return view('users.profile', compact('users'));
    }

}
