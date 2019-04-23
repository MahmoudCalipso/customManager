<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;


class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.index')->with('clients',Client::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
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
            "typecl" =>"required",
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
            "solde"     => "numeric|required",
            "matricule"     => "required|",
            "social"     => "required|",
            "date"     => "required"

        ]);
        $client = new Client([
            'civilite' =>  $request->get('civilite'),
            'typecl' =>  $request->get('typecl'),
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
        $client->save();
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

        $client =  Client::find($id);
        return view('client.edit',compact('client'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $client =  Client::find($id);

        $client->civilite = $request->get('civilite');
        $client->typecl = $request->get('typecl');
            $client->nom = $request->get('nom');
            $client->prenom = $request->get('prenom');
            $client->tel1 = $request->get('tel1');
            $client->tel2 = $request->get('tel2');
            $client->email = $request->get('email');
            $client->fax = $request->get('fax');
            $client->gsm = $request->get('gsm');
            $client->adresse = $request->get('adresse');
            $client->codePostal = $request->get('codepostal');
            $client->ville = $request->get('ville');
            $client->pays = $request->get('pays');
            $client->Solde = $request->get('solde');
            $client->matfiscal = $request->get('matricule');
            $client->Raison_Social = $request->get('social');
            $client->datecrea = $request->get('date');


        $client->save();

        return view('client.index')->with('clients',Client::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::where('Code', $id)->delete();
        return redirect()->back();
    }
}
