<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\DB;
use Closure;
use Session;

class CkeckSeuil
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $groupes = DB::select("SELECT g.id
        FROM stocks s, groupements g
        WHERE s.groupement_id = g.id and s.id in
       (select max(id) from stocks s where groupement_id in
       (select id from groupements where seuil > s.quantite_reelle) group by groupement_id)");

        $donneurs = DB::select("select donneurs.telephone, donneurs.nom, donneurs.prenom, dossier_medicals.created_at as date_dernier_don from donneurs, dossier_medicals
        where donneurs.id = dossier_medicals.donneur_id and dossier_medicals.id in (select max(id)
        from dossier_medicals where donneur_id in (select id from donneurs) and dossier_medicals.groupement_id in (
        SELECT g.id
        FROM stocks s, groupements g
        WHERE s.groupement_id = g.id and s.id in
        (select max(id) from stocks s where groupement_id in
        (select id from groupements where seuil > s.quantite_reelle) group by groupement_id))
        group by donneur_id) and DATEDIFF(CURRENT_DATE, dossier_medicals.created_at) >= 90");

        if (!empty($groupes))
        {

            $request->session()->flash('critique');
        }



      return $next($request);

    }

}
