<?php

namespace App\Http\Controllers;

use App\Models\DossierMedical;
use App\Models\Donneur;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class DossierMedicalPrelevementController extends Controller
{
    public function donneur_apte_a_prelevee()
    {
        $dossiers = Donneur::with('dossierMedicals')->get();
        /* dd($d);
        $dossiers = DossierMedical::with('donneur')->get(); */
        $dossiers = $dossiers->filter(function($dossier) {

            $last = $dossier->dossierMedicals->last();
            if($last)
            {
                $ago = $last->created_at->addMonths(3);
                 $current = Carbon::today();
                 return $current->greaterThanOrEqualTo($ago);

            }else {
                return true;
            }

        });
        return view('prelevement.donneur_apte_a_prelevee', compact('dossiers'));
    }
    public function prelever($id)
    {
        $donneur = Donneur::find($id);
        $dossier= DossierMedical::find($id);
        return view('prelevement.prelever', compact('donneur','dossier'));
    }
    public function store(Request $request, DossierMedical $dossier)
    {
        /* dd($request->all()); */
        $dossier->update([
            'type_prelevement' => $request->type_prelevement,
            'type_poche' => $request->type_poche,
            'observation_prelevement' => $request->observation_prelevement,
            'quantite_prelevee' => $request->quantite_prelevee,
            'date_heure_prelevement' => date('Y-m-d')
        ]);
        return redirect(route('prelevement.donneur_apte_a_prelevee'));
    }
    public function donneur_prelevee()
    {
        $prelevements = DossierMedical::with('donneur')->get();
        /* $dds = Donneur::with('dossierMedicals')->get(); */
       /*  dd($dds->quantite_prelevee); */
        return view('prelevement.donneur_prelevee', compact('prelevements'));
    }
    public function show_prelevement(DossierMedical $prelevement)
    {
        return view('prelevement.show_prelevement', compact('prelevement'));
    }
    public function edit($id)
    {
        $prelevement = DossierMedical::find($id);
        return view('prelevement.edit', compact('prelevement'));
    }


}
