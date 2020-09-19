<link rel="stylesheet" href="{{asset('css/cart.css')}}">

@include('layouts.frontend.component.header')
@extends('layouts.master')

<div class="wrap cf">
    <h1 class="projTitle"><span>D-Droid</span> Shopping Cart</h1>
    <div class="heading cf">
      <h1>My Cart</h1>
      <a href="{{url('shop')}}" class="continue">Continue Shopping</a>
    </div>

    @php
    $total = 0; 
    $Shipping = 5;
     @endphp
          @if (session('cart'))
          @foreach (session('cart') as $id => $product )
      
         <div class="cart">
  <!--    <ul class="tableHead">
        <li class="prodHeader">Product</li>
        <li>Quantity</li>
        <li>Total</li>
         <li>Remove</li>
      </ul>-->
      <ul class="cartWrap">
        <li class="items odd">
          
      <div class="infoWrap"> 
          <div class="cartSection">

       
         @php
           
             $sub_total = $product['price'] * $product['quantity'] ;
  
             $total += $sub_total;
         @endphp

          <img src="{{$product['image']}}" alt="{{$product['name']}}" 
          class="itemImg" width="150">
            <p class="itemNumber">#QUE-007544-002</p>
            <h3> <span>{{$product['name']}}</span></h3>
          
             <form>
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
            
                <p> <input type="text" type="number" id="number" value="{{$product['quantity']}}"  class="qty" placeholder="{{$product['quantity']}}"/> x ${{$product['price']}}</p>
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
              </form>


            <p class="stockStatus"> In Stock</p>
          </div>  
      
          
          <div class="prodTotal cartSection">
            <p>${{$sub_total}}</p>
          </div>
                <div class="cartSection removeWrap">
             <a href="{{route('remove',[$id])}}" class="remove">x</a>
          </div>
        </div>
        </li>
      
        
        
        <!--<li class="items even">Item 2</li>-->
 
      </ul>
    </div>
  
    @endforeach
      
  
    <div class="promoCode"><label for="promo">Have A Promo Code?</label><input type="text" name="promo" placholder="Enter Code" />
    <a href="#" class="btn"></a></div>
    
    <div class="subtotal cf">
      <ul>
        <li class="totalRow"><span class="label">Subtotal</span><span class="value">${{$total}}</span></li>
        
            <li class="totalRow"><span class="label">Shipping</span><span class="value">$5.00</span></li>
        
              <li class="totalRow final"><span class="label">Total</span><span class="value">${{$total+$Shipping}}</span></li>
              @endif
      <li class="totalRow"><a href="{{route('shipping')}}" class="btn continue">Checkout</a></li>
      </ul>
    </div>
  </div>
      <!-- footer -->
      @include('layouts.frontend.footers.footer')
      <!-- //footer -->
      <script>

  function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}

      </script>
  