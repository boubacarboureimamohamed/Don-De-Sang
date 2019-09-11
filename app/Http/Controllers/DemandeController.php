<?php

namespace App\Http\Controllers;

use App\Models\Beneficiaire;
use App\Models\Demande;
use App\Models\Groupement;
use App\Models\LigneDemande;
use App\Models\Livraison;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function create()
    {
        $beneficiaires = Beneficiaire::all();
        $groupements = Groupement::all();
        return view('demande.create', compact('beneficiaires','groupements', 'lignedemande'));
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
        return redirect('demande');
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
    public function demandeupdate(Request $request, Demande $demande, Beneficiaire $beneficiaire)
    {
        $benefi = $beneficiaire->updateOrCreate([
            'libelle'=>$request->libelle,
            'telephone'=>$request->telephone,
            'adresse'=>$request->adresse,
            'email'=>$request->email
        ]);

        $demande->update([
            'date' => $request->date,
            'beneficiaire_id' => $benefi->id
        ]);
        return redirect(route('demande.index'));
    }
    public function lignestore(Request $request)
    {
        $this->validate($request, [
            'groupement_id' => 'required|string',
            'quantite_demandee' => 'required|integer',

        ]);
       /*  $user = \App\User::find(Auth::user()->getAuthIdentifier()); */
        $success = LigneDemande::Create($request->all());
        $success->load('groupement');
        return response()->json(['ligne'=> $success]);
    }
    public function ligneupdate(Request $request, LigneDemande $ligne)
    {
        $ligne->update([
            'goupement_id' => $request->groupement_id,
            'quantite_demandee' =>$request->quantite_demandee
        ]);
        return back();
    }
    public function demandedestroy($id)
    {
        Demande::destroy($id);
        return redirect()->back();
    }
    public function lignedestroy($id)
    {
        LigneDemande::destroy($id);
        return redirect()->back();
    }
    public function livraison(Request $request, LigneDemande $ligne)
    {
        $livraison = Livraison::create([
            'quantite_livree' => $request->quantite_livree,
            'date' => $request->date
        ]);
        $ligne->update([
            'livraison_id' => $livraison->id
        ]);
    }
}
