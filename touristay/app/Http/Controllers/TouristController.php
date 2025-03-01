<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Validation\Rule;

class TouristController extends Controller
{
    public function tourist(){
        return view('TouristeHome');
    }
    public function Tprofile()
    {
        $user = auth()->user();
        return view('TouristeProfile', compact('user'));
    }

    public function updateProfile(Request $request)
{
    $user = auth()->user();

    $valider = $request->validate([
        'name' => 'required|string|max:255',
        'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
        'image' => 'nullable',

    ]);
    
    $user->update([
        'nom' => $valider['name'],
        'email' => $valider['email'],
        'image' => $valider['image'],

    ]);
    return redirect()->back()->with('success', 'Informations mises à jour !');
}
}
