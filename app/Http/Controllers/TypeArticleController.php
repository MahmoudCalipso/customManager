<?php

namespace App\Http\Controllers;
use App\Type_articles;
use Illuminate\Http\Request;

class TypeArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeArts = Type_articles::all();
        return view('type_art.index',compact('typeArts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type_art.create');
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
            "libelleTypeArt"=>'required'
        ]);
        $typeArt = new Type_articles([
            "libelleTypeArt"  =>  $request->get('libelleTypeArt'),
        ]);
        $typeArt->save();
        return redirect('type_arts')->with('success', 'Type Article saved!');
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
        $typeArt = Type_articles::find($id);
        return View('type_art.edit', compact('typeArt'));
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
        "libelleTypeArt"=>'required'
    ]);
        $typeArt = Type_articles::find($id);
        $typeArt->libelleTypeArt = $request->get('libelleTypeArt');
        $typeArt->save();
        return redirect('type_arts')->with('success', 'Type Article updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $typeArt= Type_articles::find($id);
        $typeArt->delete();
        return redirect('type_arts')->with('success', 'Type Article deleted!');
    }
}
