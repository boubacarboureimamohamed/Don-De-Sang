<?php

namespace App\Http\Controllers;

use App\Models\Beneficiaire;
use App\Models\Demande;
use App\Models\Groupement;
use App\Models\LigneDemande;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function create()
    {
        $beneficiaires = Beneficiaire::all();
        return view('demande.create', compact('beneficiaires'));
    }
    public function store(Request $request)
    {
        $beneficiaire = Beneficiaire::firstOrCreate([
            'libelle'=>$request->libelle,
            'telephone'=>$request->telephone,
            'adresse'=>$request->adresse,
            'email'=>$request->email
        ]);

        $demande = Demande::create([
            'date' => $request->date,
            'beneficiaire_id' => $beneficiaire->id
        ]);
        $groupement = Groupement::create([
            'groupe_sanguin' => $request->groupe_sanguin
        ]);
        LigneDemande::create([
            'quantite_demandee' => $request->quantite_demandee,
            'demande_id' => $demande->id,
            'groupement_id' => $groupement->id
        ]);
    }
}
