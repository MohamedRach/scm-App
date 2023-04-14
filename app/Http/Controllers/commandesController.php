<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commande;
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
        return view('commandes.index', ["commandes" => $commandes]);
    }
    public function create()
    {
        return view("commandes.create");
    }

    public function store()
    {
        $commande = new commande();
        $commande->adresse_livraison = request("adresse_livraison");
        $commande->poids = request("poids");
        $commande->prix = 10*request("poids");
        $commande->etat = "non livré";
        $commande->id_client= Auth::id();

        $commande->save();
        return redirect('/');
    }

    public function destroy($id_commande)
    {
        $commande = commande::findorfail($id_commande);
        $commande->delete();
    }
    
}
