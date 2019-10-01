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
        $messagErreurs = 
        [ 
            'name.required' => 'Le nom d utilisation est obligatoire!',
            'name.max' => 'Le nom d utilisateur ne doit pas dépasser 100 caracteres!',
            'name.string' => 'Le nom d utilisateur ne doit que des lettres!',
            'email.required' => 'Adresse mail est obligatoire',
            'email.email' => 'Adresse mail doit être valide',
            'email.max' => 'Adresse mail ne doit pas dépasser 50 caracteres!',
            'email.unique' => 'Adresse mail est unique!',
            'date_naiss.required' => 'La date de naissance est obligatoire!',
            'sexe.required' => 'Le sexe est obligatoire!',
            'profession.required' => 'La profession est obligatoire!',
            'profession.alpha' => 'La profession ne doit contenir lettres!',
            'adresse.required' => 'Adresse est obligatoire!',
            'telephone.required' => 'Le numéro est obligatoire!',
            'telephone.unique' => 'Le numéro de telephone est unique!', 
            'telephone.min' => 'Le numéro de telephone doit avoir 8 caracteres!',
            'telephone.max' => 'Le numéro de téléphone ne doit pas dépasser 15 caracteres!'
    ];
       return Validator::make($data, [
            'name' => 'string|required|max:100',
            'email' => 'email|required|unique:users|max:50',
            'date_naiss' => 'required|date', 
            'lieu_naiss' => 'required',
            'sexe' => 'required',
            'profession' => 'required|alpha',
            'adresse' => 'required',
            'telephone' => 'required|unique:users|min:8|max:15'

       ], $messagErreurs);
       /* if($validation->fails())
        {
            $returnData = array(
                'error'=>$validation->errors()->all()
            );
            return redirect()->back()->with(['error' =>$validation->errors()->all()]);
        } */
        
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email
        ]);
        $user->syncRoles($request->roles);
        return redirect(route('users.index'))->with('success', 'La modification a été effetué avec succés!');
    }

    public function updateperso(Request $request, User $user)
    {

        $messageErreur = 
        [
            'nom.required' => 'Le nom de l utilisateur est réquis!',
            'nom.string' => 'Le nom de l utilisateur ne doit contenir que des lettres!',
            'nom.max' => 'Le nom de l utilisateur ne doit pas dépasser 50 caracteres!',
            'email.max' => 'Adresse mail ne doit pas dépasser 30 caracteres!',
            'email.email' => 'Adresse mail doit être valide!',
            'lieu_naiss.required' => 'Le lieu de naissance de l utilisateur est réquis!',
            'lieu_naiss.max' => 'Le lieu de naissance de l utilisateur ne doit pas dépasser 20 caracteres!',
            'sexe.required' => 'Le sexe de l utilisateur est réquis!',
            'adresse.required' =>'Adresse de l utilisateur est réquis!',
            'profession.required' => 'La profession de l utilisateur est réquis!',
            'profession.alpha' => 'La profession de l utilisateur ne doit contenir que des lettres!',
            'telephone.required' => 'Le numero du telephone de l utilisateur est réquis!',
            'telephone.max' => 'Le numéro du telephone de l utilisateur ne doit pas dépasser 8 chiffres!',
            'date_naiss.required' => 'La date de naissance de l utilisateur est réquise!'
        ];

        $validation = $this->validate($request, [
            'name' => 'required|string|max:50',
            'email' => 'email|max:30',
            'lieu_naiss' => 'required|string',
            'sexe' => 'required',
            'adresse' => 'required|string',
            'profession' => 'required|alpha',
            'telephone' => 'required|string|max:20|',
            'date_naiss' => 'required|date'
        ],$messageErreur);

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'date_naiss'=>$request->date_naiss,
            'lieu_naiss'=>$request->lieu_naiss,
            'sexe'=>$request->sexe,
            'profession'=>$request->profession,
            'adresse'=>$request->adresse,
            'telephone'=>$request->telephone
        ]);
        return redirect(route('profile'))->with('success', 'La modification a été effetué avec succés!');
    }


    public function destroy($id)
    {
        $user = Auth::user();
        if ($id == $user->id) { echo 'Vous ne pouvez pas supprimer votre propre compte, Désolé!!!'; }
        else {

            User::destroy($id);
            return redirect(route('users.index'))->with('success', 'La suppression a été effetué avec succés!');
        }
    }

    public function profile()
    {
        $users = User::all();
        return view('users.profile', compact('users'));
    }

}
