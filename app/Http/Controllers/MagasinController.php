<?php

namespace App\Http\Controllers;

use App\Magasin;
use Illuminate\Http\Request;

class MagasinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magasins = Magasin::all();
        return view('magasin.index',compact('magasins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('magasin.create');
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
            'Mag_Intitule'=>'required',
            'Tel'=>'required',
            'Adresse'=>'required'
        ]);

        $contact = new Magasin([
            'Mag_Intitule' => $request->get('Mag_Intitule'),
            'Tel' => $request->get('Tel'),
            'Adresse' => $request->get('Adresse'),

        ]);
        $contact->save();
        return redirect('magasins')->with('success', 'Magasin saved!');
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
        $magasin = Magasin::find($id);
        return view('magasin.edit', compact('magasin'));
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
            'Mag_Intitule'=>'required',
            'Tel'=>'required',
            'Adresse'=>'required'
        ]);

        $magasin = Magasin::find($id);
        $magasin->Mag_Intitule = $request->get('Mag_Intitule');
        $magasin->Tel = $request->get( 'Tel');
        $magasin->Adresse = $request->get( 'Adresse');
        $magasin->save();
        return redirect('magasins')->with('success', 'Magasin updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $magasin = Magasin::find($id);
        $magasin->delete();

        return redirect('magasins')->with('success', 'Magasin deleted!');
    }
}
