<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\Organisation;
use App\Models\Admin;


class HomeController extends Controller
{
    public function __construct ()
    {
        //
    }
    
    public function index()
    {
        $organisations = Organisation::all();

        $email = request('email');

        $organisation=Organisation::where('email',$email)->first();
        return view('home/index', ['organisation'=>$organisation]);
    }
    
    public function volontaireInscrit()
    {
        $volontaires = \App\Models\User::all();

        return view('home.volontaire.inscrit', compact('volontaires'));
    }

    public function profil()
    {
        if (Auth::guard('admin')) {
            $utilisateur = auth('admin')->user();
        }elseif (Auth::guard('organisation')) {
            $utilisateur = auth('organisation')->user()->where('statut', '2');
        }
        return view('home/profil', compact('utilisateur'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'integer'],
            'adresse' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        Admin::update($request->all());

        return redirect()->route('home/index')
                        ->with('success', 'Compte mis à jour avec succès !');

    }
}
