<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DossierMedical;
use App\Models\Donneur;
use App\Models\Groupement;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;

class DossierMedicalValidationController extends Controller
{
    public function donneur_a_valider()
    {
        /* dd($stock); */
        $validations = DossierMedical::with('donneur')->where('rejet', null)->whereNotNull('quantite_prelevee')->get();
        return view('validation.donneur_a_valider', compact('validations'));
    }
    public function validation($id)
    {
        $groupements = Groupement::all();
        $dossier = DossierMedical::find($id);
        return view('validation.validation', compact('dossier','groupements'));
    }
    public function store(Request $request, DossierMedical $dossier)
    {
        $messageErreur = [
            'rejet.required' => 'La validation de la poche de sang est obligatoire!'
            
        ];
        $validation =  $this->validate($request, [
            'rejet' => 'required'
        ],  $messageErreur);

            $dossier->update([
            'rejet' => $request->rejet,
            'motif_rejet' => $request->motif_rejet,
            'groupement_id' => $request->groupement_id
        ]);
        if($validation->fails())
        {
            $returnData = array(
                'error'=>$validation->errors()->all()
            );
            return redirect()->back()->with(['error' =>$validation->errors()->all()]);
        }

        $last = Stock::latest()->limit(1)->where('groupement_id', $request->groupement_id)->where('type_poche', $request->type_poche)->get();

        if ($request->rejet == 1)
        {
            if(isset($last[0])){
                Stock::create([
                    'groupement_id' => $request->groupement_id,
                    'quantite_reelle' => $last[0]->quantite_reelle + 1,
                    'type_poche' => $request->type_poche
                ]);
            }else {
                Stock::create([
                    'groupement_id' => $request->groupement_id,
                    'quantite_reelle' => 1,
                    'type_poche' => $request->type_poche
                ]);
            }

        }
        return redirect(route('prelevement.donneur_prelevee'));
    }
    public function donneur_valider()
    {
        $validations = DossierMedical::with('donneur')->whereNotNull('rejet')->get();
        return view('validation.donneur_valider', compact('validations'));
    }
    public function stock()
    {
        $stocks = DB::select(" SELECT * FROM
        (
            select t1.groupe_sanguin AS 'groupe_sanguin',t1.type_poche AS 'simple',t1.quantite_reelle AS 	           'simple_qte',t2.type_poche AS 'double',t2.quantite_reelle AS 'double_qte'
            from
            (SELECT g.groupe_sanguin, s.type_poche, s.quantite_reelle
                    FROM stocks s, groupements g
                   WHERE s.groupement_id = g.id and s.id in
                   (select max(id) from stocks where type_poche in ('Simple','Double')
                   and groupement_id in (select id from groupements) group by groupement_id, type_poche)
            ) t1
            join
            (SELECT g.groupe_sanguin, s.type_poche, s.quantite_reelle
                    FROM stocks s, groupements g
                   WHERE s.groupement_id = g.id and s.id in
                   (select max(id) from stocks where type_poche in ('Simple','Double')
                   and groupement_id in (select id from groupements) group by groupement_id, type_poche)
            ) t2
            where ((t2.groupe_sanguin = t1.groupe_sanguin) and (t2.type_poche <> t1.type_poche))
        ) vs WHERE vs.simple = 'simple' ");

        return view('validation.stock',compact('stocks'));

    }
    public function don_accepter()
    {
        $dons = DossierMedical::with('donneur')->where('rejet', '1')->get();
        return view('validation.donaccepter', compact('dons'));
    }
     public function don_rejete()
    {
        $dons = DossierMedical::with('donneur')->where('rejet', '0')->get();
        return view('validation.donrejete', compact('dons'));
    }
    public function show_donaccepter($id)
    {
        $don =  DossierMedical::with('donneur')->find($id);
        return view('validation.showdonaccepter', compact('don'));
    }
    public function show_donrefuse($id)

    {
        $don =  DossierMedical::with('donneur')->find($id);
        return view('validation.showdonrefuse', compact('don'));
    }
    public function index_groupage()
    {
       
        $groupes = Groupement::all();
        return view('validation.indexgroupage', compact('groupes'));
    }
    
    public function update_seuil(Request $request, Groupement $groupement)
    {
        $messageErreur = 
        [
            'seuil.required' => 'Le seuil du stock est obligatoire!',
            'seuil.integer' => 'Le seuil ne doit contenir que des chiffres!',
            'seuil.max' => 'Le seuil ne doit pas dépasser 3 caracteres!'
        ];
      $validation =  $this->validate($request, [
            'seuil' => 'required|integer|max:3',
        ], $messageErreur);
        if($validation->fails())
        {
            $returnData = array(              
                'error'=>$validation->errors()->all()
            );
            return redirect()->back()->with(['error' =>$validation->errors()->all()]);
        }
        $groupement->update([
       'seuil'=>$request->seuil
      ]);

      return redirect()->back();
    }
}
