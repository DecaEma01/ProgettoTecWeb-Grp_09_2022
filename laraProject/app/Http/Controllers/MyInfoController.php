<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\User;

class MyInfoController extends Controller {

    
    
    public function updateUser(Request $request) {
        $uId = Auth::id();
        $user = User::findOrFail($uId);

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'user' => ['required', 'string', 'min:8', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'genere' => ['required', 'in:Uomo,Donna'],
            'eta' => ['required', 'integer','min:18'],
            
        ]);
        
        $user -> nome = $request -> input('name');
        $user -> cognome = $request -> input('surname');
        $user -> user = $request -> input('username');
        $user -> email = $request -> input('e-mail');
        if($request->input('gender') != null && $request->input('eta') != null){
            $user -> sesso = $request -> input('gender');
            $user -> eta = $request -> input('eta');
        }
        $user->save();
        return view('profile');
    }
    


}
