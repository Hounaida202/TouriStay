<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Annance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store(Request $request, $annance_id)
    {
        $validatedData = $request->validate([
            'debut' => 'required|date|after_or_equal:today',
            'fin' => 'required|date|after:debut'
        ]);

        $annance = Annance::findOrFail($annance_id);

        $reservation = Reservation::create([
            'debut' => $validatedData['debut'],
            'fin' => $validatedData['fin'],
            'annance_id' => $annance_id,
            'utilisateur_id' => Auth::id() 
        ]);

        return redirect()->back()->with('success', 'Réservation effectuée avec succès');
    }

   
}



