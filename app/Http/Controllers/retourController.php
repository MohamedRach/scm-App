<?php

namespace App\Http\Controllers;

use App\Models\retour;
use App\Models\commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class retourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware("auth");
        $this->middleware('isAdmin')->only([
            'index',
            'edit',
            'update',
            'destroy'
        ]);
    }
    public function index()
    {
        $retour = retour::all();
        return view('retour.index', ["retours" => $retour]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $commandes = commande::where("id_client", Auth::id())->get();
        return view("retour.create", ["commandes"=> $commandes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $retour = new retour();
        $retour->motif = request("motif");
        $retour->etat = "non livré";
        $retour->id_commande = request("commande");
        $retour->id_client = Auth::id();
        
        $retour->save();
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(retour $retour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $retour = retour::findOrfail($id);
        
        return view('retour.edit', ["retour" => $retour]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, retour $retour)
    {
        $retour = retour::findOrfail(request('id'));
        $retour->etat = request('etat');

        $retour->save();
        return redirect('/retour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $retour = retour::findorfail($id);
        $retour->delete();

        return redirect('/retour');
    }
}
