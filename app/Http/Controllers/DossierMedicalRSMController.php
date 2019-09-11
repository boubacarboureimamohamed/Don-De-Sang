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
            'poid' => 'required|integer',
            'temperature' => 'required|integer',
            'tension_arterielle' => 'required|integer',
            'observation_approbation' => 'required|string',
            'quantite_a_prelevee' => 'required|integer',
            'approbation' => 'required',
        ]);
        $dossier = DossierMedical::create([
            'poid' => $request->poid,
            'temperature' => $request->temperature,
            'tension_arterielle' => $request->tension_arterielle,
            'date_dossier_medical' => date('Y-m-d'),
            'approbation' => $request->approbation,
            'observation_approbation' => $request->observation_approbation,
            'quantite_a_prelevee' => $request->quantite_a_prelevee,
            'donneur_id' => $request->donneur_id,
        ]);
        if ($dossier->approbation == 1)
        {
            $dossier->update([
                'num_don' => 'DON-' . date('Y-m-d') . '-' . $dossier->id
            ]);
        }
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
        $donneursexaminers = DossierMedical::with('donneur')->where('quantite_prelevee', null)->get();
        return view('dossierM.donneursexaminer', compact('donneursexaminers'));
    }

    public function edit_donneursexaminer($id)
    {
      $donneurexaminer = DossierMedical::with('donneur')->find($id);

      return view('dossierM.editdonneursexaminer', compact('donneurexaminer'));
    }

    public function update_donneursexaminer(Request $request, DossierMedical $donneurexaminer)
    {
        $this->validate($request, [
            'poid' => 'required|integer',
            'temperature' => 'required|integer',
            'tension_arterielle' => 'required|integer',
            'observation_approbation' => 'required|string',
            'quantite_a_prelevee' => 'required|integer',
            'approbation' => 'required',
        ]);
        $donneurexaminer->update([
        'poid'=>$request->poid,
        'temperature'=>$request->temperature,
        'tension_arterielle'=>$request->tension_arterielle,
        'date_dossier_medical'=>$request->date_dossier_medical,
        'approbation'=> $request->approbation,
        'quantite_a_prelevee'=>$request->quantite_a_prelevee

     ]);

     return redirect(route('dossierM.donneursexaminer'));
    }

    public function show_donneursexaminer($id)
    {
        $donneursexaminer = DossierMedical::with('donneur')->find($id);
        return view('dossierM.showdonneursexaminer', compact('donneursexaminer'));
    }
    public function destroy($id)
    {
        Donneur::destroy($id);
    }

}
