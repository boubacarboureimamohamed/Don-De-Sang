<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/users';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

       // $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messagErreurs = 
        [ 
            'name.required' => 'Le nom d utilisation est obligatoire!',
            'name.max' => 'Le nom d utilisateur ne doit pas dépasser 100 caracteres!',
            'email.required' => 'Adresse mail est obligatoire',
            'email.email' => 'Adresse mail doit être valide',
            'email.max' => 'Adresse mail ne doit pas dépasser 50 caracteres!',
            'email.unique' => 'Adresse mail est unique!',
            'password.required' => 'Le mot de passe est obligatoire!',
            'password.confirmed' => 'Confirmez le mot de passe!',
            'password.min' => 'Le mot de passe doit avoir au moins 8 caracteres!'
    ];
       return Validator::make($data, [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
       ], $messagErreurs);
       if($validation->fails())
        {
            $returnData = array(
                'error'=>$validation->errors()->all()
            );
            return redirect()->back()->with(['error' =>$validation->errors()->all()]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user->syncRoles($data['roles']);
        return $user;
    }

}
