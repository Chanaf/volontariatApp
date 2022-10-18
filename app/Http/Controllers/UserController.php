<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function __construct() 
    {
        //$this->middleware('auth:user');
    }
    public function index()
    {
        $organisations = \App\Models\Organisation::all()->where('statut', '2');

        $activites = \App\Models\Activite::all();
        $organisation = \App\Models\Activite::find(1)->organisation;

        return view('user/index', compact('activites', 'organisation', 'organisations'));
    }

    public function show()
    {
        $volontaire = auth('user')->user();
        return view('user/detail', compact('volontaire'));
    }

    public function participer($id)
    {
        $participers = new \App\Models\Participer();

        $idu = request('id');

        $activite = \App\Models\Activite::find($id);
        $volontaire= \App\Models\User::where('id', $idu)->first();

        $participers->activite_id = $activite.id;
        $participers->volontaire_id = $volontaire.id;
        $participers->save();

        return back()->with('info', 'Votre demande de participation a été enregistrée.');
    }
}
