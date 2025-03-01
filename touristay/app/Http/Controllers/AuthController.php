<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
// ------------------------------------------------

    public function showRegistrationForm()
    {
        return view('register'); 
    }

// ~~~~~~~~~~~~

    public function register(Request $request)
{

    $validated = $request->validate([
        'nom' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:utilisateur'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'role' => ['required'],
    ]);

    $user = User::create([
        'nom' => $validated['nom'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
        'role' => $validated['role'],

    ]);

    auth()->login($user);

    return redirect()->route('register');
 
    
}

// ------------------------------------------------

    public function showLoginForm(){
       return view('index');
    }

    public function login(Request $request){
            $isvalid = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $isvalid['email'])->first();

        if ($user && Hash::check($isvalid['password'], $user->password)) {

            auth()->login($user);


            if ($user->role == 'tourist') {  
                return redirect()->route('tourist');  
            } 
            if ($user->role == 'proprietaire') {  
                return redirect()->route('proprietaire');  
            }
        }
        return back()->withErrors(['email' => 'Identifiants incorrects'])->withInput();
   }

}