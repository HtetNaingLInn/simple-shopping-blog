<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class PageController extends Controller
{
 public function index(){
     $products =product::all();
     return view('home',compact('products'));
 }


 public function add(Request $request,$id){
   $items=array();

   if($request->session()->has('items')){
    $items=$request->session()->get('items');

        if(!in_array($id,$items)){
            array_push($items,$id);

        }
        

    }else
    array_push($items,$id);
   $request->session()->put('items',$items);
  // $request->session()->flush();
   $products =product::all();   
     return view('home',compact('products'));
 }



  public function show(Request $request){

    $cart=$request->session()->get('items');

    $products=array();

    for( $i=0; $i < count($cart) ; $i++){

    $product=product::find($cart[$i]); 

    array_push($products,$product);
    }

      return view('cart',compact('products'));
  }
 

}
