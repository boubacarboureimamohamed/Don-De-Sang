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
        $dossiers = DossierMedical::with('donneur')->where('quantite_prelevee', null)->get();
        return view('prelevement.donneur_apte_a_prelevee', compact('dossiers'));
    }
    public function prelever($id)
    {
        $dossier= DossierMedical::with('donneur')->find($id);
        return view('prelevement.prelever', compact('dossier'));
    }
    public function store(Request $request, DossierMedical $dossier)
    {
        $this->validate($request, [
            'type_prelevement' => 'required|string',
            'type_poche' => 'required|string',
            'quantite_prelevee' => 'required|integer',
            'observation_prelevement' => 'required|string'
        ]);
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
        $prelevements = DossierMedical::with('donneur')->whereNotNull('quantite_prelevee')->where('rejet', null)->get();
        return view('prelevement.donneur_prelevee', compact('prelevements'));
    }
    public function show_prelevement(DossierMedical $prelevement)
    {
        return view('prelevement.show_prelevement', compact('prelevement'));
    }
    public function edit($id)
    {
        $prelevement = DossierMedical::with('donneur')->find($id);
        return view('prelevement.edit', compact('prelevement'));
    }
    public function update(Request $request, DossierMedical $prelevement)
    {
        $this->validate($request, [
            'type_prelevement' => 'required|string',
            'type_poche' => 'required|string',
            'quantite_prelevee' => 'required|integer',
            'observation_prelevement' => 'required|string'
        ]);
        $prelevement->update([
            'type_prelevement' => $request->type_prelevement,
            'type_poche' => $request->type_poche,
            'observation_prelevement' => $request->observation_prelevement,
            'quantite_prelevee' => $request->quantite_prelevee,
            'date_heure_prelevement' => date('Y-m-d')
        ]);
        return redirect(route('prelevement.donneur_prelevee'));
    }


}
