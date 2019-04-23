<?php

namespace App\Http\Controllers;
use App\Marque;
use Illuminate\Http\Request;

class MarquesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marques = Marque::all();
        return view('marque.index',compact('marques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('marque.create');
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
            'Marque_Intitule' => 'required'
        ]);
        $marque = new Marque([
            'Marque_Intitule'=> $request->get('Marque_Intitule')
        ]);
        $marque->save();
        return redirect('marques')->with('success', 'Marque saved!');
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
        $marque = Marque::find($id);
        return View('marque.edit', compact('marque'));
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
            'Marque_Intitule' => 'required'
        ]);
        $marque = Marque::find($id);
        $marque->Marque_Intitule= $request->get('Marque_Intitule');
        $marque->save();
        return redirect('marques')->with('success', 'Marque Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marque = Marque::find($id);
        $marque->delete();
        return redirect('marques')->with('success', 'Marque deleted!');
    }
}
