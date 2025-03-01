<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Favoris;
use App\Models\Annance;

class FavorisController extends Controller
{
    public function store( $annance_id)
    {
        $utilisateur_id = Auth::user(); 
        Favoris::create([
            'utilisateur_id' => $utilisateur_id->id, 
            'annance_id' => $annance_id, 
        ]);

        return redirect()->back()->with('success', 'Annonce ajoutée aux favoris !');
    }

    public function mesFavoris()
    {
        $user = auth()->user(); 
    
        // $annances = Annance::whereIn('annance_id', Favoris::where('utilisateur_id', $user->id)->pluck('annance_id'))->get();
    
        $favoris = $user->favoris()->with("annance")->get();

        return view('TouristeFavoris', compact('favoris'));
    }
}
