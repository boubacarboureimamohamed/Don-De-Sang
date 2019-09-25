<?php

namespace App\Http\Controllers;

use App\Models\Beneficiaire;
use App\Models\Demande;
use App\Models\Groupement;
use App\Models\LigneDemande;
use App\Models\Livraison;
use App\Models\Stock;
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
            'type_poche' => $request->type_poche[$j],
            'demande_id' => $demande->id,
            'groupement_id' => $request->groupement[$j]
        ]);
        }
        return redirect('demande')->with('success', 'Lenregistrement a été effetué avec succés!');
    }
    public function index()
    {
        $demandes = Demande::with('ligne_demandes.groupement','beneficiaire')->get();
       /*  dd($demandes); */
        return view('demande.index',compact('demandes'));
    }
    public function show(Demande $demande)
    {
        $lignes = LigneDemande::where('demande_id',$demande->id)->with('groupement','livraison')->get();
        $groupements = Groupement::all();
        $lignenonlivree = LigneDemande::with('livraison','groupement')->where('livraison_id', null)->get();
        /* dd($demandelivrees); */
        /* $de = Demande::with('beneficiaire')->whereId($demande->id)->get(); */
        /* dd($lignes); */
        return view('demande.show',compact('lignes','lignenonlivree','groupements','demande'));
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
        return redirect(route('demande.index'))->with('success', 'La modification a été effetué avec succés!');
    }
    public function lignestore(Request $request)
    {
       $ligne = LigneDemande::where('demande_id', $request->demande_id)->where('groupement_id', $request->groupement_id)->where('type_poche', $request->type_poche)->get();

       if(isset($ligne[0]))
       {
            $qte = $request->quantite_demandee + $ligne[0]->quantite_demandee;
            $success = $ligne[0]->update(['quantite_demandee' => $qte]);
       }else {
            $success =  LigneDemande::Create($request->all());
       }
       /*
        $success->load('groupement'); */
        //return response()->json(['ligne'=> $success]);
        return redirect()->back();
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
        $quantite = $ligne->quantite_demandee;
        $last = Stock::latest()->limit(1)->where('groupement_id', $request->groupement_id)->get();
        $this->validate($request, [
            'quantite_livree' => 'required|integer|max:'.$quantite,
        ]);
            if(isset($last[0])){
                if($last[0]->quantite_reelle > $request->quantite_livree )
                {
                    $livraison = Livraison::create([
                        'quantite_livree' => $request->quantite_livree,
                        'date' => $request->date
                    ]);

                    Stock::create([
                        'groupement_id' => $request->groupement_id,
                        'quantite_sortie' => $request->quantite_livree,
                        'quantite_reelle' => $last[0]->quantite_reelle - $request->quantite_livree
                    ]);
                    $ligne->update([
                        'livraison_id' => $livraison->id
                    ]);
                }else { return $request->session()->flash('warning', 'c pas marché'); }
            }else{
                return $request->session()->flash('warning', 'c pas marché');
            }
        return redirect()->back();
    }
}
