<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('users.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('users.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messageErreur = 
        [
            'name.required' => 'Le nom du role est obligatoire!',
            'name.alpha' => 'Le role ne doit contenir que des lettres!',
            'seuil.unique' => 'Le role doit être unique!'
        ];
      $validation =  $this->validate($request, [
            'name' => 'required|alpha|unique:roles'
        ], $messageErreur);
        if($validation->fails())
        {
            $returnData = array(              
                'error'=>$validation->errors()->all()
            );
            return redirect()->back()->with(['error' =>$validation->errors()->all()]);
        }

        $role = Role::create(['name'=> $request->role]);
        $role->syncPermissions($request->permissions);
        return redirect(route('roles.index'))->with('success', 'L enregistrement a été effetué avec succés!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::all();
        return view('users.roles.edit', compact('permissions','role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $messageErreur = 
        [
            'name.required' => 'Le nom du role est obligatoire!',
            'name.alpha' => 'Le role ne doit contenir que des lettres!',
            'seuil.unique' => 'Le role doit être unique!'
        ];
      $validation =  $this->validate($request, [
            'name' => 'required|alpha|unique:roles'
        ], $messageErreur);
        if($validation->fails())
        {
            $returnData = array(              
                'error'=>$validation->errors()->all()
            );
            return redirect()->back()->with(['error' =>$validation->errors()->all()]);
        }

        $role->update(['name'=>$request->role]);
        $role->syncPermissions($request->permissions);
        return redirect(route('roles.index'))->with('success', 'La modification a été effetué avec succés!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Role::destroy($id);
       return redirect(route('roles.index'));
    }
}
