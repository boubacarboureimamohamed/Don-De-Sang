<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donneur;
use App\Models\DossierMedical;

class DossierMedicalRController extends Controller
{
    public function index()
    {
        $donneurs = Donneur::with('typedonneur','situationmats','organisation')->get();
        return view('dossierM.index', compact('donneurs'));
    }
    public function examiner($id)
    {
        $donneur = Donneur::find($id);
        return view('dossierM.examiner', compact('donneur'));
    }
    public function store(Request $request)
    {
        /* dd($request); */
        /* $this->validate($request, [
            'poid' => 'required|integer|max:2',
            'temperature' => 'required|integer|max:2',
            'tension_arterielle' => 'required|integer|max:2',
            'num_don' => 'required|string|max:255|unique:dossier_medicals',
            'observation_approbation' => 'required|string|max:255',

        ]); */
        DossierMedical::create([
            'poid' => $request->poid,
            'temperature' => $request->temperature,
            'tension_arterielle' => $request->tension_arterielle,
            'date_dossier_medical' => $request->date_dossier_medical,
            'approbation' => $request->approbation,
            'observation_approbation' => $request->observation_approbation,
            'num_don' => $request->num_don,
            'quantite_a_prelevee' => $request->quantite_a_prelevee,
            'donneur_id' => $request->donneur_id
        ]);
        return redirect(route('dossierM.index'));
        dd($request);
    }
    public function donneur_apte()
    {
        $donneur_aptes = DossierMedical::with('donneur')->get();
        return view('dossierM.donneur_apte',compact('donneur_aptes'));
    }
    public function donneur_inapte()
    {
        $donneur_inaptes = DossierMedical::with('donneur')->get();
        return view('dossierM.donneur_inapte',compact('donneur_inaptes'));
    }
    public function show_apte(DossierMedical $donneur_apte)
    {
        //dd($donneur_apte->donneur->id);
       /*  $aptes =DossierMedical::with(['donneur' => function($query) use($donneur_apte){
            return $query->where('id', '=',$donneur_apte->donneur->id);
        }])->get(); */
        $aptes = $donneur_apte->donneur->dossierMedicals;
        $a = $donneur_apte->donneur;
        //$a = DossierMedical::with('donneur')->whereId($donneur_apte->donneur->id)->get();
        //dd($donneur_apte->donneur);
        return view('dossierM.show_apte',compact('aptes','a'));
    }
}
