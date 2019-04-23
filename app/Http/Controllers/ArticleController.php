<?php

namespace App\Http\Controllers;
use App\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::all();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('article.create');
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
            'Art_Ref' => 'required',
            'Art_Designation'=>'required',
            'Art_CodeBarre'=>'required',
            'Qte'=>'required',
            'DateAchat'=>'required',
            'Marque_Id'=>'required',
            'idTypeArt'=>'required',
            'Art_Image'=>'required',
            'Four_Id'=>'required',
            'TVA_Id'=>'required',
            'Art_HT'=>'required',
            'Art_TTC'=>'required',
            'ArtRv_HT'=>'required',
            'ArtRv_TTC'=>'required',
            'Art_PrixUht'=>'required',
            'Art_PrixUTtc'=>'required'
        ]);


        $featured = $request->Art_Image;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/articles',$featured_new_name);



        $articles = Articles::create([
              'Art_Ref' => $request->Art_Ref,
              'Art_Designation'=>$request->Art_Designation,
              'Art_CodeBarre'=>$request->Art_CodeBarre,
              'Qte'=>$request->Qte,
              'DateAchat'=>$request->DateAchat,
              'Marque_Id'=>$request->Marque_Id,
              'idTypeArt'=>$request->idTypeArt,
              'Art_Image'=>'uploads/articles/'.$featured_new_name,
              'Four_Id'=>$request->Four_Id,
              'TVA_Id'=>$request->TVA_Id,
              'ArtA_HT'=>$request->Art_HT,
              'ArtA_TTC'=>$request->Art_TTC,
              'ArtV_HT'=>$request->ArtRv_HT,
              'ArtV_TTC'=>$request->ArtRv_TTC,
              'Art_PrixUht'=>$request->Art_PrixUht,
              'Art_PrixUTtc'=>$request->Art_PrixUTtc


          ]);
        return redirect('articles')->with('articles',Articles::all());

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
        $article = Articles::find($id);
        return View('article.edit', compact('article'));
    }

    public function getItem(Request $request, $id) {
      $article = Articles::find($id);
      if($article) {
        if(!$request->session()->exists("items")) {
          $request->session()->put("items", json_encode([]));
        }
        if(!$request->session()->exists("price")) {
          $request->session()->put("price", json_encode(["ht" => 0.00, "ttc" => 0.00]));
        }

        $items = $request->session()->get("items");
        $price = $request->session()->get("price");

        $price = json_decode($price, true);
        $items = json_decode($items, true);
        $exists = false;

        foreach($items as $item => $count) {
          if($item == $id) {
            $exists = true;
            break;
          }
        }


        if($exists) {
          $items[$id] = $items[$id]+1;
        } else {
          $items[$id] = 1;
        }

        $price["ht"] = number_format($price["ht"]+$article["ArtV_HT"], 2);
        $price["ttc"] = number_format($price["ttc"]+$article["ArtV_TTC"], 2);

        $request->session()->put("items", json_encode($items));
        $request->session()->put("price", json_encode($price));

        $article["item_count"] = $items[$id];

        return response()->json($article);
      } else {
        return response()->json([]);
      }
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
            'Art_Ref' => 'required',
            'Art_Designation'=>'required',
            'Art_CodeBarre'=>'required',
            'Qte'=>'required',
            'DateAchat'=>'required',
            'Marque_Id'=>'required',
            'idTypeArt'=>'required',
            'Four_Id'=>'required',
            'TVA_Id'=>'required',
            'Art_HT'=>'required',
            'Art_TTC'=>'required',
            'ArtRv_HT'=>'required',
            'ArtRv_TTC'=>'required',
            'Art_PrixUht'=>'required',
            'Art_PrixUTtc'=>'required'
        ]);



        $article = Articles::find($id);

        $article->Art_Ref = $request->get('Art_Ref');
        $article->Art_Designation = $request->get('Art_Designation');
        $article->Art_CodeBarre = $request->get('Art_CodeBarre');
        $article->Qte = $request->get('Qte');
        $article->DateAchat = $request->get('DateAchat');
        $article->Marque_Id = $request->get('Marque_Id');
        $article->idTypeArt = $request->get('idTypeArt');

        $article->Four_Id = $request->get('Four_Id');
        $article->TVA_Id = $request->get('TVA_Id');
        $article->ArtA_HT = $request->get('Art_HT');
        $article->ArtA_TTC = $request->get('Art_TTC');
        $article->ArtV_HT = $request->get('ArtRv_HT');
        $article->ArtV_TTC = $request->get('ArtRv_TTC');
        $article->Art_PrixUht = $request->get('Art_PrixUht');
        $article->Art_PrixUTtc = $request->get('Art_PrixUTtc');

          if ( $request->hasFile('Art_Image')  ) {
                $featured = $request->Art_Image;
                $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/articles',$featured_new_name);
            $article->Art_Image = 'uploads/articles'.$featured_new_name;

        }
        //dd($request->all());

        $article->save();
        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Articles::where('Art_Id', $id)->delete();
        return redirect()->back();
    }
}
