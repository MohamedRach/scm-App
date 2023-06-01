<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commande;
use App\Models\retour;
use App\Models\tournee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use ArielMejiaDev\LarapexCharts\Facades\LarapexChart;
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

        return redirect('/commandes');
    }
    public function edit($id_commande)
    {
        $commande = commande::findOrfail($id_commande);
        $tournée = tournee::all();
        return view('commandes.edit', ["commande" => $commande, 'tournees'=> $tournée]);
    }
    public function update()
    {
        $commande = commande::findOrfail(request('id'));
        $commande->N°_immeuble = request('N°_immeuble');
        $commande->quartier = request('quartier');
        $commande->ville = request('ville');
        $commande->code_postal = request('code_postal');
        $commande->contenue = request("contenue");
        $commande->poid = request("poid");
        $commande->prix = request("prix");
        $commande->type = request('type');
        $commande->etat = request('etat');
        $commande->id_tournée = request('tournée');

        $commande->save();
        return redirect('/commandes');
    }
    public function dashboard(){
        $commande_livré = commande::where('etat', "livré")->count();
        $commande_non_livré = commande::where('etat', "non livré")->count();
        $retour_livré = retour::where('etat', "livré")->count();
        $retour_non_livré = retour::where('etat', "non livré")->count();
        $commandes = commande::select('created_at')->where('etat', 'livré')->get();
        $months = array('january' => 0, 'february' => 0, 'march' => 0, 'april' => 0, 'may' => 0, 'june' => 0, 'july' => 0, 'august' => 0, 'september' => 0, 'october' => 0, 'november' => 0, 'december' => 0);

        foreach($commandes as $commande){
            if (($timestamp = strtotime($commande->created_at)) !== false){
                $php_date = getdate($timestamp);
            
                $date = date("m", $timestamp);
                //echo $date;
                switch ($date) {
                    case 01:
                        $months['january'] += 1;
                        break;
                    case 02:
                        $months['february'] += 1;
                        break;
                    case 03:
                        $months['march'] += 1;
                        break;
                    case 04:
                        $months['april'] += 1;
                        break;
                    case 05:
                        $months['may'] += 1;
                        break;
                    case 06:
                        $months['june'] += 1;
                        break;
                    case 07:
                        $months['july'] += 1;
                        break;
                    case 8:
                        $months['august'] += 1;
                        break;
                    case 9:
                        $months['september'] += 1;
                        break;
                    case 10:
                        $months['october'] += 1;
                        break;
                    case 11:
                        $months['november'] += 1;
                        break;
                    case 12:
                        $months['december'] += 1;
                        break;
                    default:
                        break;   
                }  
            }
        }
        return view('dashboard', ["commandes_livré" => $commande_livré, "commandes_non_livré" => $commande_non_livré, "retour_livré" => $retour_livré, "retour_non_livré" => $retour_non_livré, "months" => $months, 'commandes' => $commandes]);
    }

    
}