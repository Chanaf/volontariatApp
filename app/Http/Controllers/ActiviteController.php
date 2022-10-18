<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;

class ActiviteController extends Controller
{

    public function __construct ()
    {
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activites = Activite::all();
        $organisation = Activite::find(1)->organisation; 

        return view('home.activite.listeActivite', compact('activites', 'organisation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => ['required', 'string', 'max:255'],
            'date_debut' => ['required', 'datetime'],
            'date_fin' => ['required', 'datetime'],
            'date_cloture' => ['required', 'datetime'],
            'nbre_volontaire' => ['required', 'integer'],
            'organisation_id' => ['required', 'integer'],
        ]);

        Activite::create($request->all());

        return back()->with('success', 'Activité ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activite = Activite::find($id);
        $organisation = Activite::find(1)->organisation;
        return view('user/detail', compact('activite', 'organisation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
