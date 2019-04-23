<?php

namespace App\Http\Controllers;

use App\fournisseur;
use Illuminate\Http\Request;

class fournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fournisseur.index')->with('fournisseurs',fournisseur::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fournisseur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "civilite"    =>  "required",
            "typefr" =>"required",
            "nom"      =>  "required",
            "prenom"   =>  "required",
            "tel1"     => "required|",
            "tel2"     => "required|",
            "email"    => "required|email",
            "fax"     => "required",
            "gsm"     => "required",
            "adresse"     => "required",
            "codepostal"     => "numeric|required",
            "ville"     => "string|required|",
            "pays"     => "string|required|",

            "matricule"     => "required|",
            "social"     => "required|",
            "date"     => "required"

        ]);
        $for = new fournisseur([
            'civilite' =>  $request->get('civilite'),
            'typefr' =>  $request->get('typefr'),
            'nom' => $request->get('nom'),
            'prenom' => $request->get('prenom'),
            'tel1' => $request->get('tel1'),
            'tel2' => $request->get('tel2'),
            'email' => $request->get('email'),
            'fax' => $request->get('fax'),
            'gsm' => $request->get('gsm'),
            'adresse' => $request->get('adresse'),
            'codePostal' => $request->get('codepostal'),
            'ville' => $request->get('ville'),
            'pays' => $request->get('pays'),
            'Solde' => $request->get('solde'),
            'matfiscal' => $request->get('matricule'),
            'Raison_Social' => $request->get('social'),
            'datecrea' => $request->get('date')
        ]);
        $for->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $for =  fournisseur::find($id);
        return view('fournisseur.edit',compact('for'));
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
        $for =  fournisseur::find($id);

        $for->civilite = $request->get('civilite');
        $for->typefr = $request->get('typefr');
        $for->nom = $request->get('nom');
        $for->prenom = $request->get('prenom');
        $for->tel1 = $request->get('tel1');
        $for->tel2 = $request->get('tel2');
        $for->email = $request->get('email');
        $for->fax = $request->get('fax');
        $for->gsm = $request->get('gsm');
        $for->adresse = $request->get('adresse');
        $for->codePostal = $request->get('codepostal');
        $for->ville = $request->get('ville');
        $for->pays = $request->get('pays');

        $for->matfiscal = $request->get('matricule');
        $for->Raison_Social = $request->get('social');
        $for->datecrea = $request->get('date');


        $for->save();

        return view('fournisseur.index')->with('fournisseurs',fournisseur::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        fournisseur::where('Four_Id', $id)->delete();
        return redirect()->back();
    }
}
