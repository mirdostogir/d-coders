<?php

// namespace App\Http\Controllers\backend;

// use DB;
// use Auth;
// use App\Product;
// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;

class CartController extends Controller
{
  // public function add(Product $product)
  //   {
  //       // add the product to cart
  //       \Cart::session(auth()->id())->add(array(
  //           'id' => $product->id,
  //           'name' => $product->name,
  //           'price' => $product->price,
  //           'quantity' => 1,
  //           'attributes' => array(),
  //           'associatedModel' => $product
  //       ));



  //       return redirect()->route('cart.index');

  //   }

  //   public function index(){

  //       $cartItems = \Cart::session(Auth::user()->id)->getContent();
  //        dd($cartItems);
  //       return view('cart.index',compact('cartItems'));
  //   }
}
