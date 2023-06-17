<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleve = Eleve::all();
        return view('eleves.index' , ['eleve'=>$eleve]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $eleve = new Eleve();
        return view('eleves.create' , ['eleve'=>$eleve]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $eleve = new Eleve ;
        $eleve->nom = $request->input('nom');
        $eleve->prenom = $request->input('prenom');
        $eleve->club_id = $request->input('club_id');
        $eleve->save();
        return redirect('eleves');
    }

    /**
     * Display the specified resource.
     */
    public function show(Eleve $eleve)
    {
        return view('eleves.show',['eleve'=>$eleve]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eleve $eleve)
    {
        return view('eleves.edit', ['eleve'=>$eleve]);
        // return response()->json($eleve);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eleve $eleve)
    {
        $eleve->nom = $request->input('nom');
        $eleve->prenom = $request->input('prenom');
        $eleve->club_id = $request->input('club_id');
        $eleve->save();
        return view('eleves.edit' , ['eleve'=>$eleve]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $eleve)
    {
        //
    }
}
