<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donneur;
use App\Models\DossierMedical;
use Illuminate\Support\Carbon;

class DossierMedicalRSMController extends Controller
{
    public function index()
    {
        $donneurs = Donneur::with('typedonneur','situationmats','organisation','dossierMedicals')->get();

        $donneurs = $donneurs->filter(function($donneur) {

            $last = $donneur->dossierMedicals->last();
            if($last)
            {
                $ago = $last->created_at->addMonths(3);
                 $current = Carbon::today();
                 return $current->greaterThanOrEqualTo($ago);

            }else {
                return true;
            }

        });
            dd($donneurs);
        return view('dossierM.index', compact('donneurs'));
    }
    public function examiner($id)
    {
        $donneur = Donneur::find($id);
        return view('dossierM.examiner', compact('donneur'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'poid' => 'required|integer|max:3',
            'temperature' => 'required|integer|max:2',
            'tension_arterielle' => 'required|integer|max:2',
            'observation_approbation' => 'required|string',
            'num_don' => 'required|integer|max:12|unique:dossier_medicals',
            'quantite_a_prelevee' => 'required|integer|max:3',
            'approbation' => 'required',
        ]);
        DossierMedical::create([
            'poid' => $request->poid,
            'temperature' => $request->temperature,
            'tension_arterielle' => $request->tension_arterielle,
            'date_dossier_medical' => date('Y-m-d'),
            'approbation' => $request->approbation,
            'observation_approbation' => $request->observation_approbation,
            'num_don' => $request->num_don,
            'quantite_a_prelevee' => $request->quantite_a_prelevee,
            'donneur_id' => $request->donneur_id
        ]);
        return redirect(route('dossierM.index'));
    }
    public function donneur_apte()
    {
        //$donneur_aptes = DossierMedical::with('donneur')->get();
        $donneurs= Donneur::with('dossierMedicals')->get();
        return view('dossierM.donneur_apte',compact('donneurs'));
    }
    public function donneur_inapte()
    {
        //$donneur_aptes = DossierMedical::with('donneur')->get();
        $donneur_inaptes= DossierMedical::with('donneur')->get();
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

    public function donneurs_examiner()
    {
        $donneursexaminers = DossierMedical::with('donneur')->where('approbation', 'Inapte')->orWhere('approbation', 'Apte')->get();
        return view('dossierM.donneursexaminer', compact('donneursexaminers'));
    }
}
