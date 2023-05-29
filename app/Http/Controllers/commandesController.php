<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commande;
use App\Models\tournee;
use Illuminate\Support\Facades\Auth;
class commandesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }
    public function index()
    {
        $commandes = commande::all();
        $tournée = tournee::all();
        return view('commandes.index', ["commandes" => $commandes, "tournees" => $tournée]);
    }
    public function create()
    {
        return view("commandes.create");
    }

    public function store()
    {
        $commande = new commande();
        $commande->nom_destinataire = request('nom_destinataire');
        $commande->prenom_destinataire = request('prenom_destinataire');
        $commande->telephone = request('telephone');
        $commande->N°_immeuble = request('N°_immeuble');
        $commande->quartier = request('quartier');
        $commande->ville = request('ville');
        $commande->code_postal = request('code_postal');
        $commande->contenue = request("contenue");
        $commande->poid = request("poid");
        $commande->prix = 10*request("poid");
        $commande->type = request('type');
        $commande->paiment = request('paiment');
        $commande->id_client= Auth::id();
        $commande->etat = "non livré";

        $commande->save();
        return redirect('/user');
    }

    public function destroy($id_commande)
    {
        $commande = commande::findorfail($id_commande);
        $commande->delete();
    }
    
}
