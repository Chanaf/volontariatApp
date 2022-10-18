<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organisation;

class OrganisationController extends Controller
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
        //$organisations = Organisation::latest()->paginate(5);
    
        //return view('home.preinscrit',compact('organisations'))
           // ->with('i', (request()->input('page', 1) - 1) * 5);
        $organisations = Organisation::all()->where('statut', '1');

        return view('home.organisation.preinscrit', compact('organisations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Auth.registerOrganisation');
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
            'name' => ['required', 'string', 'max:255'],
            'domaine' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'integer'],
            'adresse' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
  
        if ($logo = $request->file('logo')) {
            $destinationPath = '../../images/organisations/';
            $profileImage = date('YmdHis') . "." . $logo->getClientOriginalExtension();
            $logo->move($destinationPath, $profileImage);
            $input['logo'] = "$profileImage";
        }
        Organisation::create($input);

        return redirect()->route('accueil')
                        ->with('success', 'Organisation inscrite avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('organisations.show', compact('organisation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('organisations.edit', compact('organisation'));
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'domaine' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'integer'],
            'adresse' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $organisations->update($request->all());

        return redirect()->route('organisations.index')
                        ->with('success', 'Organisation mise à jour avec succès !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id->delete();

        return redirect()->route('organisations.index')
                        ->with('success','Organisation supprimée avec succès');
    }

    /**
     * Validate the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function valider($id)
    {
        $organisations = Organisation::find($id);
        $organisations->statut = 2;
        $organisations->update();

        return back()->with('info', 'La pré-inscription a bien été acceptée.');
    }

    /**
     * Rejected the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rejeter($id)
    {
        $organisations = Organisation::find($id);
        $organisations->statut = 0;
        $organisations->update();

        return back()->with('info', 'La pré-inscription a été rejetée.');
    }

    /**
     * Display a listing of the validated resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function inscrit()
    {
        //$organisations = Organisation::latest()->paginate(5);
    
        //return view('home.preinscrit',compact('organisations'))
           // ->with('i', (request()->input('page', 1) - 1) * 5);
        $organisations = \App\Models\Organisation::all()->where('statut', '2');

        return view('home.organisation.inscrit', compact('organisations'));
    }

    public function monOrga()
    {
        //$organisations = Organisation::latest()->paginate(5);
    
        //return view('home.preinscrit',compact('organisations'))
           // ->with('i', (request()->input('page', 1) - 1) * 5);

        $organisation = auth('organisation')->user()->where('statut', '2');

        return view('home/index', compact('organisation'));
    }
}
