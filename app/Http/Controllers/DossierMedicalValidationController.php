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
        $validation = $dossier->update([
            'rejet' => $request->rejet,
            'motif_rejet' => $request->motif_rejet,
            'groupement_id' => $request->groupement_id
        ]);

        $last = Stock::latest()->limit(1)->where('groupement_id', $request->groupement_id)->get();

        if ($request->rejet == 1)
        {
            if(isset($last[0])){
                Stock::create([
                    'groupement_id' => $request->groupement_id,
                    'quantite_reelle' => $last[0]->quantite_reelle + 1
                ]);
            }else {
                Stock::create([
                    'groupement_id' => $request->groupement_id,
                    'quantite_reelle' => 1
                ]);
            }

        }
        return redirect(route('validation.donneur_a_valider'));
    }
    public function donneur_valider()
    {
        $validations = DossierMedical::with('donneur')->whereNotNull('rejet')->get();
        return view('validation.donneur_valider', compact('validations'));
    }
    public function stock()
    {
        $stocks = DB::select("SELECT g.groupe_sanguin,  s.quantite_reelle
                             FROM stocks s, groupements g
                            WHERE s.groupement_id = g.id and s.id in
                            (select max(id) from stocks where groupement_id in
                            (select id from groupements) group by groupement_id)");
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
       
        $groupement->update([
       'seuil'=>$request->seuil
      ]);

      return redirect()->back();
    }
}
