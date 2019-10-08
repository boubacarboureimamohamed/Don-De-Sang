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
        $datedemenade = $request->date;
        $date=strtotime(date("Y-m-d H:i:s"));
        if($date <= strtotime($datedemenade))
        { 
            return back()->with('error', 'La date de la demande doit etre inférieur ou egale a la date du jour');
        }
        /* $messageErreur = [
            'telephone.required' => 'Le numéro de télephone du bénéficiaire  est obligatoire!',
            'telephone.max' => 'Le numéro de télephone du bénéficiaire ne doit pas dépasser 15 caracteres!',
            'adresse.required' => 'Adresse du bénéficiaire est obligatoire!',
            'email.email' => 'Adresse mail du bénéficaire doit être valide!',
            'date.required' => 'La date de la demande est obligatoire!',
            'quantite_demandee.required' => 'La quanité de poche de sang demandée est obligatoire',
            'quantite_demandee.integer' => 'La quantité de poche de sang demandée ne doit contenir que des chiffres!',
            'quantite_demandee.max' => 'La quantité de poche de sang demandée ne doit pas dépasser 3 caracteres!' ,
            'telephone.unique' => 'Le numéro de télephone du bénéficiaire doit être unique',
            'email.unique' => 'Adresse mail du bénéficaire doit être unique'
 
        ]; */

     /*  $validation =  $this->validate($request, [
            'libelle' => 'string',
            'telephone' => 'required|string|max:15|unique:demandes',
            'adresse' => 'string|required',
            
            'date' => 'required|date',
            'quantite_demandee' => 'required|integer|max:3'
        ],  $messageErreur);

    if($validation->fails())
        {
            $returnData = array(
                'error'=>$validation->errors()->all()
            );
            return redirect()->back()->with(['error' =>$validation->errors()->all()]);
        } */

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
        return redirect()->back()->with('success', 'Lenregistrement a été effetué avec succés!');
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
        $demande = Demande::with('ligne_demandes')->find($id);
        if(!empty($demande->ligne_demandes))
        {
            return redirect()->back()->with('error', 'Vous ne pouvez pas supprimé cette demande car elle contient au moins une ligne!');
        }
        Demande::destroy($id);
        return redirect()->back()->with('success', 'La suppression a été effetué avec succés!');
    }
    public function lignedestroy($id)
    {
        $lignedemande = LigneDemande::find($id);
        if(!empty($lignedemande->livraison_id))
        {
            return redirect()->back()->with('error', 'Vous ne pouvez pas supprimé cette la ligne après avoir été livrée!');
        }
        LigneDemande::destroy($id);
        
        return redirect()->back()->with('success', 'La suppression a été effetué avec succés!');
    }
    public function livraison(Request $request, LigneDemande $ligne)
    {
        $datedemande = $request->datedemande;
        $datelivraison = $request->date;
        if($datelivraison <= $datedemande)
        {
            return back()->with('error', 'La date de la demande doit etre inférieur ou egale a la date de livriason!');
        }
            
            $quantite = $ligne->quantite_demandee;
            $last = Stock::latest()->limit(1)->where('groupement_id', $request->groupement_id)->where('type_poche', $request->type_poche)->get();
            //dd($last);

            $messageErreur = [
                'quantite_livree.required' => 'La qauntité livrée est requise!',
                'quantite_livree.max' => 'La qauntité livrée doit être inférieur ou égale à la quantité demandée!',
                'quantite_livree.integer' => 'La qauntité livrée doit être un nombre entier!'
    
            ];

        $this->validate($request, [
            'quantite_livree' => 'required|integer|max:'.$quantite,
        ],$messageErreur);
            if(isset($last[0])){
                if($last[0]->quantite_reelle >= $request->quantite_livree )
                {
                    $livraison = Livraison::create([
                        'quantite_livree' => $request->quantite_livree,
                        'date' => $request->date
                    ]);

                   $t= Stock::create([
                        'groupement_id' => $request->groupement_id,
                        'type_poche' => $request->type_poche,
                        'quantite_sortie' => $request->quantite_livree,
                        'quantite_reelle' => $last[0]->quantite_reelle - $request->quantite_livree
                    ]);
                    $ligne->update([
                        'livraison_id' => $livraison->id
                    ]);
                }else { return back()->with('error', 'La quantité en stock est inférieur à la quantité livrée!'); }
            }else{
                return back()->with('error', 'Le stock n!');
            }
        return back()->with('success', 'La ligne de demande a été livrée!');;
        
       
    }
}
