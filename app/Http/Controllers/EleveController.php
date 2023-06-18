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
        return redirect('students')->with('success', 'student added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Eleve $student)
    {
        return view('eleves.show',['eleve'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eleve $student)
    {
        return view('eleves.edit', ['eleve'=>$student]);
        // return response()->json($eleve);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eleve $student)
    {
        $student->nom = $request->input('nom');
        $student->prenom = $request->input('prenom');
        $student->club_id = $request->input('club_id');
        $student->save();
        return redirect('students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $student)
    {
        $student->delete();
        return redirect()->back()->with('success', 'student deleted successfully');
    }
}
