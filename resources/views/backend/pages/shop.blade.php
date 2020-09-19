
<!------   shop link -->

<link rel="stylesheet" href="{{asset('css/shop.css')}}">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/6.0.0/normalize.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<!------ End  shop link -->

 <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">

@extends('layouts.master')
@include('layouts.frontend.component.header')
<body>


    <div class="menu">
        <div class="mini-menu">
            <ul>
            @foreach($categories as $row)
        <li class="sub">
            <a href="#">{{ $row->name }}</a>
    
            <ul>
                @foreach($row->sub_categories as $sub)
                <li><a href="">{{$sub->name}}</a></li>
                @endforeach
            </ul>
            
        </li>
        @endforeach
    </ul>
        </div>
    
       
        <div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li> Men's</li>
							<li> Women's</li>
							<li> Bags</li>
							<li> Footwear</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
                        @foreach($products as $products)
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="{{asset( $products->image )}} " alt="" class="pro-image-front">
										<img src="{{asset( $products->image )}} " alt="" class="pro-image-back">
                             			<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.html" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{ $products->name }}</a></h4>
										<div class="info-product-price">
											<span class="item_price">${{$products->price}}</span>
											<del>$69.71</del>
										</div>
										
                                        <a  href="{{route('add-cart', $products->id)}}" class="button btn-cart"><span><span>Add to My Cart</span></span></a>
														
																			
									</div>
								</div>
                            </div>
                            
                            @endforeach  
						
							<div class="clearfix"></div>
						</div>
						<!--//tab_one-->
						<!--/tab_two-->
		
				
					</div>
				</div>	
			</div>
	<br>
    
    <!-- //new_arrivals -->
    <!-- /we-offer -->
    <div class="sale-w3ls">
        <div class="container">
            <h6>We Offer Flat <span>40%</span> Discount</h6>

            <a class="hvr-outline-out button2" href="single.html">Shop Now </a>
        </div>
    </div>

<hr>

<hr>
<hr>



</body>
@include('layouts.frontend.footers.footer')
<script type="text/javascript">
    $(document).ready(function () {
        $(".sub > a").click(function() {
            var ul = $(this).next(),
                    clone = ul.clone().css({"height":"auto"}).appendTo(".mini-menu"),
                    height = ul.css("height") === "0px" ? ul[0].scrollHeight + "px" : "0px";
            clone.remove();
            ul.animate({"height":height});
            return false;
        });
           $('.mini-menu > ul > li > a').click(function(){
           $('.sub a').removeClass('active');
           $(this).addClass('active');
        }),
           $('.sub ul li a').click(function(){
           $('.sub ul li a').removeClass('active');
           $(this).addClass('active');
        });
    });

    const cartButtons = document.querySelectorAll('.cart-button');

cartButtons.forEach(button => {
	button.addEventListener('click', cartClick);
});

function cartClick() {
	let button = this;
	button.classList.add('clicked');
}
</script>
<script src="{{asset('script.js')}}" ></script>


</html>
