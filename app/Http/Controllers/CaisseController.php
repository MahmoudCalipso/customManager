<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Marque;
use App\Type_articles;

class CaisseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $typeArts = Type_articles::all();
        $marques = Marque::all();

        if((!isset($_GET['mark']) && !isset($_GET['type'])) || ($_GET['mark'] == "" && $_GET['type'] == "")) {
          $articles = Articles::paginate(6);
        } else if(isset($_GET['mark']) && isset($_GET['type']) && $_GET['mark'] != "" && $_GET['type'] != ""){
          $articles = Articles::where('Marque_Id', $_GET['mark'])->where('idTypeArt', $_GET['type'])->paginate(6);
          $articles->withPath('caisse?type='.htmlentities($_GET['type'])."&mark=".$_GET['mark']);
        } else if(isset($_GET['mark']) && (!isset($_GET['type']) || $_GET['type'] == "")) {
          $articles = Articles::where('Marque_Id', $_GET['mark'])->paginate(6);
          $articles->withPath('caisse?mark='.htmlentities($_GET['mark']));
        } else if(isset($_GET['type']) && (!isset($_GET['mark'])  || $_GET['mark'] == "")) {
          $articles = Articles::where('idTypeArt', $_GET['type'])->paginate(6);
          $articles->withPath('caisse?type='.htmlentities($_GET['type']));
        }


        $items = [];
        if($request->session()->exists("items") && $request->session()->exists("price")) {
          $items_data = json_decode($request->session()->get("items"), true);
          $price = json_decode($request->session()->get("price"), true);

          foreach($items_data as $item => $count) {
            $article = Articles::find($item);
            $article["count"] = $count;

            array_push($items, $article);
          }
        } else {
          $price = ["ht" => 0, "ttc" => 0];
        }

        return view('caisse.index', compact('items', 'price', 'articles', 'marques', 'typeArts'));
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
        //
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
