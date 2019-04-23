<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;

class Session extends Controller
{
    public function index(Request $request) {
      $items = $request->session()->get('items');

      return response()->json(json_decode($items));
    }

    public function removeItem(Request $request, $id) {
      $article = Articles::find($id);

      if(!$request->session()->exists("items")) {
        $request->session()->put("items", json_encode([]));
      }


      $items = $request->session()->get("items");

      $items = json_decode($items, true);
      $exists = false;

      foreach($items as $item => $count) {
        if($item == $id) {
          $exists = true;
          break;
        }
      }

      if($exists) {
        if($request->session()->exists("price") && $article) {
          $price = $request->session()->get("price");
          $price = json_decode($price, true);
          $price["ht"] = number_format($price["ht"]-($article["ArtV_HT"]*$items[$id]), 2);
          $price["ttc"] = number_format($price["ttc"]-($article["ArtA_TTC"]*$items[$id]), 2);
          $request->session()->put("price", json_encode($price));
        }

        unset($items[$id]);
      }

      $request->session()->put("items", json_encode($items));

      return response()->json(["response" => "true", "items" => $items]);
    }

    public function reduceItem(Request $request, $id) {
      $article = Articles::find($id);

      if(!$request->session()->exists("items")) {
        $request->session()->put("items", json_encode([]));
      }
      $items = $request->session()->get("items");

      $items = json_decode($items, true);
      $exists = false;

      foreach($items as $item => $count) {
        if($item == $id) {
          $exists = true;
          break;
        }
      }

      if($exists) {
        if($request->session()->exists("price") && $article) {
          $price = $request->session()->get("price");
          $price = json_decode($price, true);
          $price["ht"] = number_format($price["ht"]-($article["ArtV_HT"]), 2);
          $price["ttc"] = number_format($price["ttc"]-($article["ArtA_TTC"]), 2);
          $request->session()->put("price", json_encode($price));
        }
        if($items[$id] == 1) {
          unset($items[$id]);
        } else {
          $items[$id] -= 1;
        }
      }

      $request->session()->put("items", json_encode($items));

      return response()->json(["response" => "true", "items" => $items]);
    }

    public function setItemCount(Request $request, $id, $count) {
      $article = Articles::find($id);

      if(!$request->session()->exists("items")) {
        $request->session()->put("items", json_encode([]));
      }
      $items = $request->session()->get("items");

      $items = json_decode($items, true);

      if($request->session()->exists("price") && $article) {
        $price = $request->session()->get("price");
        $price = json_decode($price, true);

        $price["ht"] = $price["ht"]-($article["ArtV_HT"]*$items[$id]);
        $price["ttc"] = $price["ttc"]-($article["ArtA_TTC"]*$items[$id]);

        $price["ht"] = number_format($price["ht"]+($article["ArtV_HT"]*$count), 2);
        $price["ttc"] = number_format($price["ttc"]+($article["ArtA_TTC"]*$count), 2);
        $request->session()->put("price", json_encode($price));
      }

      $items[$id] = $count;

      $request->session()->put("items", json_encode($items));

      return response()->json(["response" => "true", "items" => $items]);
    }

    public function clearItemSession(Request $request) {
      $request->session()->forget("items");

      return response()->json(["response" => "true", "items" => []]);
    }

    public function getUpdatedPrice(Request $request) {
      if($request->session()->exists("price")) {
        return response()->json(["response" => "true", "price" => json_decode($request->session()->get("price"))]);
      } else {
        return response()->json(["response" => "false", "price" => []]);
      }
    }
    public function clearPriceSession(Request $request) {
      $request->session()->forget("price");

      return response()->json(["response" => "true", "price" => []]);
    }
}
