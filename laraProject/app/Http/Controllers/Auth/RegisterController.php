<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    
     //N.B con unique impedisco email e user identici con altri utenti
    protected function validator(array $data)
    { 
        //dd($data);
       
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'user' => ['required', 'string', 'min:8', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'genere' => ['required_if:radioBtn,Locatario', 'in:Uomo,Donna'],
            //'eta' => ['required_if:radioBtn,Locatario', 'integer','min:18'],
        ]);
    }

    public function checkLevel($genere,$eta){
        $livello=0;
        if(($genere== null) && ($eta== null)){
            $livello = 2;
        }else{
            $livello = 1; 
        }
        return $livello;
   }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nome' => $data['name'],
            'cognome' => $data['surname'],
            'user' => $data['user'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'sesso' => $data['genere'],
            'eta' => $data['eta'],
            //'livello' => 2->default(2),
            'livello' => $this->checkLevel($data['genere'],$data['eta']),
            
        ]);
    }



}
