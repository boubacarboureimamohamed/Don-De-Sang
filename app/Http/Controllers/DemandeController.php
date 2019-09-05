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
        $groupements = Groupement::all();
        return view('demande.create', compact('beneficiaires','groupements'));
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
        for($j=0; $j < count($request->groupement); $j++) {
        LigneDemande::create([
            'quantite_demandee' => $request->quantite_demandee[$j],
            'demande_id' => $demande->id,
            'groupement_id' => $request->groupement[$j]
        ]);
        }
    }
    public function index()
    {
        $demandes = Demande::with('ligne_demandes.groupement','beneficiaire')->get();
       /*  dd($demandes); */
        return view('demande.index',compact('demandes'));
    }
    public function show(Demande $demande)
    {
        $lignes = Demande::whereId($demande->id)->with('ligne_demandes.groupement')->get()[0];
        $groupements = Groupement::all();
        /* $de = Demande::with('beneficiaire')->whereId($demande->id)->get(); */
        /* dd($lignes); */
        return view('demande.show',compact('lignes','demande','groupements'));
    }
    public function edit($id)
    {
        $beneficiaires = Beneficiaire::all();
        $demande = Demande::find($id);
        return view('demande.edit', compact('beneficiaires','demande'));
    }
    public function update1(Request $request, LigneDemande $demande)
    {
        $demande->update([
            'date_heure' => $request->quantite_demandee,
            'typerdv_id' => $request->groupement,
        ]);
        dd($demande);
    }
    public function lignestore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'groupe_sanguin' => 'required|string',
            'quantite_demandee' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
       /*  $user = \App\User::find(Auth::user()->getAuthIdentifier()); */
        $success = Contact::Create($request->all());
        return response()->json(['success'=>'Data is successfully added']);
    }
}
