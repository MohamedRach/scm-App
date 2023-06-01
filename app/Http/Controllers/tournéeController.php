<?php

namespace App\Http\Controllers;

use App\Models\tournee;
use App\Models\chauffeur;
use Illuminate\Http\Request;

class tournéeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin');
        
    }
    public function index()
    {
        $tournées = tournee::all();
        return view('tournée.index', ["tournées" => $tournées]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $chauffeurs = chauffeur::all();
        return view("tournée.create", ['chauffeurs' => $chauffeurs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tournee = new tournee();
        $tournee->date_départ = request("date_départ");
        $tournee->date_retour = request("date_retour");
        $tournee->id_chauffeur = request("chauffeur");
        $tournee->etat = "depart";
        $tournee->save();

        return redirect('/tournée');
    }

    /**
     * Display the specified resource.
     */
    public function show(tournee $tournee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tournee = tournee::findOrfail($id);
        $chauffeurs = chauffeur::all();
        return view('tournée.edit', ["tournées" => $tournee, "chauffeurs" => $chauffeurs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tournee $tournee)
    {
        $tournee = tournee::findOrfail(request('id'));
        $tournee->date_départ = request('date_depart');
        $tournee->date_retour = request('date_retour');
        $tournee->id_chauffeur = request('chauffeur');
        $tournee->etat = request('etat');
        

        $tournee->save();
        return redirect('/tournée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tournee = tournee::findOrfail($id);
        $tournee->delete();

        return redirect("/tournée");
    }
}
