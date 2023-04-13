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

        $tournee->save();

        return redirect('/admin/tournée');
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
    public function edit(tournee $tournee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tournee $tournee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tournee $tournee)
    {
        //
    }
}
