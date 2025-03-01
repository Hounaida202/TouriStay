<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;


class TouristController extends Controller
{
    public function tourist(){
        return view('TouristeHome');
    }
    public function Tprofile($id)
    {
        $user = User::find($id);
        return view('TouristeProfile', compact('user'));
    }

    public function updateProfile(Request $request)
{
    $user = auth()->user();

    $valider = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:utilisateur,email',
    ]);

    $user->update([
        'nom' => $valider['name'],
        'email' => $valider['email'],
    ]);
    return redirect()->back()->with('success', 'Informations mises à jour !');
}
}
