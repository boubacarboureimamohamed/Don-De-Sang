<?php

namespace App\Http\Controllers;

use App\Models\DossierMedical;
use App\Models\Donneur;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;



use Illuminate\Support\Facades\Mail;



use Twilio\Rest\Client;
use Twilio\Jwt\ClientToken;


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
        $quantite_prelevve = $dossier->quantite_a_prelevee;
        $this->validate($request, [
            'type_prelevement' => 'required|string',
            'type_poche' => 'required|string',
            'quantite_prelevee' => 'required|integer|max:'.$quantite_prelevve,
            'observation_prelevement' => 'required|string'
        ]);
        $dossier->update([
            'type_prelevement' => $request->type_prelevement,
            'type_poche' => $request->type_poche,
            'observation_prelevement' => $request->observation_prelevement,
            'quantite_prelevee' => $request->quantite_prelevee,
            'date_heure_prelevement' => date('Y-m-d')
        ]);

        Mail::send('welcome', [], function ($message){
            $message->to('momlaouali@gmail.com')->subject('Testing mail');
        });
//         $accountSid = config('app.twilio')['TWILIO_ACCOUNT_SID'];
//         $authToken  = config('app.twilio')['TWILIO_AUTH_TOKEN'];
//         $client = new Client($accountSid, $authToken);
//         try
//         {
//             // Use the client to do fun stuff like send text messages!
//             $client->messages->create(
//             // the number you'd like to send the message to 
//                 $dossier->donneur->telephone,
//            array(
//                  // A Twilio phone number you purchased at twilio.com/console
//                  'from' => '+12056512557',
//                  // the body of the text message you'd like to send
//                  'body' => 'Bonjour M./Mme ' .$dossier->donneur->nom. ' ' .$dossier->donneur->prenom. ' nous vous remercions du don effectué. Sachez que vous sauvez une vie!'
//              )
//          );
//    }
//         catch (Exception $e)
//         {
//             echo "Error: " . $e->getMessage();
//         } 

 Mail::send(['title' => "remerciement", 'content' => "merci monsieur"], function ($message)
        {
 
            $message->from('ammahamadou94@gmail.com', 'Christian Nwamba');
 
            $message->to('momlaouali@gmail.com');
 
        });
 


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
