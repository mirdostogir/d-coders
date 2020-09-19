<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use DB;

class ShopController extends Controller
{
    
    
    public function index() {
       
        $products = DB::table('products')->get();

        $categories=DB::table('categories')->get();

      
     
       foreach($categories as $categorie){

           $sub_category = DB::table('sub_categories')
           ->where('categorie_id', $categorie->id)->get();
            
           $categorie->sub_categories = $sub_category;
       }    
        return view('backend.pages.shop',compact('products','categories'));
    } 


    public function cart(){
    
      
        return view('cart.cart');

    }

    public function addTocart(Product $product){

      $cart = session()->get('cart');

      if(!$cart) {

        $cart =[

          $product->id=>[

            'name' =>$product->name,
            'quantity' =>1,
            'price' =>$product->price,
            'image' =>$product->image
          ]
          ];

          session()->put('cart',$cart);
          return redirect()->route('cart')->with('success',"Added To Cart");
        
       

      }

      if(isset($cart[$product->id])){
        
        $cart[$product->id]['quantity']++;
        session()->put('cart',$cart);
        return redirect()->route('cart')->with('success',"Added To Cart");
    
       

      }


      $cart[$product->id] = [
        'name' =>$product->name,
        'quantity' =>1,
        'price' =>$product->price,
        'image' =>$product->image

      ];
         session()->put('cart',$cart);
       
      return redirect()->route('cart')->with('success',"Added To Cart");
       
    }

    public function removeFromCart($id){

        $cart = session()->get('cart');

        if(isset($cart[$id])){
                
            unset($cart[$id]);
            session()->put('cart',$cart);
          

        }
        // return redirect()->back()->with('success',"Remove from Cart");
        return redirect()->back();
    }






}