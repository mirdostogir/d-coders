<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//welcome page//
Route::get('/', function () {
  
    $products = DB::table('products')->get();
    $categories=DB::table('categories')->get();
    
    $sub_categories = DB::table('sub_categories')->get();
    return view('welcome',compact('products','categories','sub_categories'));

});

//frontend route//
Route::get('about','frontend\FrontendController@about');
Route::get('contact','frontend\FrontendController@contact');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');





//post route//
Route::get('write/product','ProductController@writeProduct')->name('write.product');
Route::post('store/product','ProductController@StoreProduct')->name('store.product');
Route::get('all/product','ProductController@AllProduct')->name('all.product');
Route::get('view/product/{id}','ProductController@ViewProduct');
Route::get('delete/product/{id}','ProductController@DeleteProduct');
Route::get('edit/product/{id}','ProductController@EditProduct');
Route::post('update/product/{id}','ProductController@UpdateProduct');

///////////////

Route::get('backend/pages/admin/admin_profile','backend\UserController@admin_profile');
Route::post('backend/pages/admin/admin_profile','UserController@update_account');

//////////

Route::resource('categories','backend\CategorieController');
Route::post('backend/pages/admin/{id}','backend\CategorieController@UpdateCategories');

///////
Route::resource('subcategories','backend\SubCategorieController');
Route::post('subcategories','backend\SubCategorieController@substore');

Route::post('updatesubcategories/{id}','backend\SubCategorieController@UpdateSubCategories');

////////
Route::resource('shop','backend\ShopController');

////////product Cart Route//////////
// Route::get('/add-to-cart/{products}', 'backend\CartController@add')->name('cart.add')->middleware('auth');
// Route::get('/cart', 'backend\CartController@index')->name('cart.index')->middleware('auth');


////////////////add cart///////
Route::get('/cart', 'backend\ShopController@cart')->name('cart')->middleware('auth');
Route::get('/add-to-cart/{product}', 'backend\ShopController@addTocart')->name('add-cart')->middleware('auth');
Route::get('/remove/{id}', 'backend\ShopController@removeFromCart')->name('remove')->middleware('auth');



// SSLCOMMERZ Start
Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/shipping', 'SslCommerzPaymentController@exampleHostedCheckout')->name('shipping');

Route::post('/pay', 'SslCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END

