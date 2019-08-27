<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
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
        return view('users.create', compact('roles'));
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
            'email'=>$request->email
        ]);
        $user->syncRoles($request->roles);
        return redirect(route('users.index'));
    }

    public function destroy($id)
    {
       User::destroy($id);
       return redirect(route('users.index'));
    }

    public function profile()
    {
        $users = User::all();
        return view('users.profile', compact('users'));
    }

}
