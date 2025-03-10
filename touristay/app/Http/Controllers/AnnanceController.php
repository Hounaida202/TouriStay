<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Annance;
use App\Models\User;


class AnnanceController extends Controller
{
    public function ShowAnnance(Request $request){
        if ($request->isMethod('POST')) {
            $titre = $request->input('search');
            $annances = Annance::where('titre', 'LIKE', "%{$titre}%")->get();
        } 
        else
        $annances = Annance::all(); 
        return view('TouristeHome', compact('annances'));    
    } 
    public function ShowAnnancefavoris(){

        $annances = Annance::all(); 
        return view('TouristeFavoris',compact('annances'));    
    }    
    public function ShowAnnanceDetaille($id){

        $annance = Annance::find($id); 
        return view('annanceDetaille', compact('annance'));    
    } 
    public function AddAnnance( Request $request ){
            $valable = $request->validate([
            'titre' => 'required',
            'adresse' => 'required', 
            'description' => 'required',
            'prix' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            'equipement' => 'required',
            'image1' => 'required|url',
            'image2' => 'url|nullable',
            'image3' => 'url|nullable',
            'occupee1' => 'required',
            'occupee2' => 'required',
        
        ]);
        $id = Auth()->user()->id; 

        Annance::create([
            'utilisateur_id' => $id,
            'titre' => $valable['titre'],
            'description' => $valable['description'],
            'debut' => $valable['debut'],
            'fin' => $valable['fin'],
            'prix' => $valable['prix'],
            'image1' => $valable['image1'],
            'image2' => $valable['image2'],
            'image3' => $valable['image3'],
            'adresse' => $valable['adresse'],
            'equipement' => $valable['equipement'],
            'occupee1' => $valable['occupee1'],
            'occupee2' => $valable['occupee2'],
        ]);

        return redirect()->route('proprietaire')->with('success','bien ajouté');         
        }
           public function destroy($id)
        {
            $annance = Annance::find($id);
            $annance->delete();
            return redirect()->back()->with('success', 'Annonce supprimée avec succès.');
        }


        public function getFormule($id){

            $annance=Annance::find($id);

            return view('EditAnnance',compact('annance'));

        }
    
        public function show($id)
        {
            $dateRange = Annance::findOrFail($id);
            return view('annanceDetaille', compact('dateRange'));
        }

 



}
