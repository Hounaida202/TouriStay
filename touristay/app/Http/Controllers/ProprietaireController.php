<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Annance;


class ProprietaireController extends Controller
{
    public function show(){
return view('ProprietaireHome');
    }
    public function getMesAnnances(){
        $user=Auth()->user();
        $annances=Annance::where('utilisateur_id',$user->id)->get();
        return view('ProprietaireHome', compact('annances'));
    }
}
