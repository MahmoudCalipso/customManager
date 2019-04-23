<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tva;
class TvaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tva_list = Tva::all();
        return view('tva.index', compact('tva_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tva.create');
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
            'TVA_Des' => 'required'
        ]);
        $tva = new Tva([
            'TVA_Des' =>  $request->get('TVA_Des')
        ]);
        $tva->save();
        return redirect('tva')->with('success', 'TVA saved!');
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

        $tva = Tva::find($id);
        return View('tva.edit', compact('tva'));
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
            'TVA_Des' => 'required'
        ]);
        $tva = Tva::find($id);
        $tva->TVA_Des = $request->get('TVA_Des');
        $tva->save();
        return redirect('tva')->with('success', 'TVA updated!');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tva = Tva::find($id);
        $tva->delete();
        return redirect('tva')->with('success', 'TVA deleted!');
    }
}
