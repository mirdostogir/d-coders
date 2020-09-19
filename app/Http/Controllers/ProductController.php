<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use APP\Product;
class ProductController extends Controller
{
    public function writeProduct()
    {
        $categorie=DB::table('categories')->get();
        $sub_categories = DB::table('sub_categories')->get();
    	return view('product.writeproduct',compact('categorie','sub_categories'));
    }
    public function allproductshow()

    {

        return view('product.allproductshow');

    }

    public function StoreProduct(Request $request)
    {
    	$validatedData = $request->validate([
             'name' => 'required|max:200',
             'image' => 'required | mimes:jpeg,jpg,png,PNG | max:1000',
             'description' => 'required',
             'price' => 'required',
             'categorie_id' =>'required',
             'sub_categorie_id' =>'required',
             
         ]);

    	$data=array();
    	$data['name']=$request->name;
        $data['categorie_id']=$request->categorie_id;
        $data['sub_categorie_id']=$request->sub_categorie_id;
        $data['description']=$request->description;
        $data['price']=$request->price;
    	$image=$request->file('image');
    	if ($image) {
    		$image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/images/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            DB::table('products')->insert($data);
             $notification=array(
                'messege'=>'Successfully product Inserted',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
    	}else{
    		 DB::table('products')->insert($data);
    		 $notification=array(
                'messege'=>'Successfully product Inserted',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
    	}

    }

    public function AllProduct()
    {
    	//// $product=DB::table('products')->paginate(3);
    	$product=DB::table('products')
    	      ->join('categories','products.categorie_id','categories.id')
    	      ->select('products.*','categories.name')
    	      ->get();
    	return view('product.allproduct',compact('product'));
    	     
    }

    public function ViewProduct($id)
    {
    	$product=DB::table('products')
    	      ->join('categories','products.categorie_id','categories.id')
    	      ->select('products.*','categories.name')
    	      ->where('products.id',$id)
    	      ->first();
    	 return view('product.viewproduct',compact('product'));    
    }

    public function DeleteProduct($id)
    {
    	$product=DB::table('products')->where('id',$id)->first();
    	$image=$product->image;
    	$delete=DB::table('products')->where('id',$id)->delete();
    	if ($delete) {
    		unlink($image);
    		$notification=array(
                'messege'=>'Successfully product Deleted !',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
    	}else{
    		$notification=array(
                'messege'=>'Something went wrong !',
                'alert-type'=>'error'
                 );
             return Redirect()->back()->with($notification);
    	}
    }


    public function EditProduct($id)
    {
    	$categorie=DB::table('categories')->get();
    	$product=DB::table('products')->where('id',$id)->first();
    	return view('product.editproduct',compact('categorie','product'));
    }


    public function UpdateProduct(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:200',
            'image' => ' mimes:jpeg,jpg,png,PNG | max:1000',
            'description' => 'required',
            'price' => 'required',
            
        ]);

    	$data=array();
        $data['name']=$request->name;
        $data['categorie_id']=$request->categorie_id;
        $data['description']=$request->description;
        $data['price']=$request->price;
	    $image=$request->file('image');
    	if ($image) {
    		$image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/images/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $data['image']=$image_url;
            unlink($request->old_photo);
            DB::table('products')->where('id',$id)->update($data);
             $notification=array(
                'messege'=>'Successfully product Updated',
                'alert-type'=>'success'
                 );
             return Redirect()->route('all.product')->with($notification);
    	}else{
    		 $data['image']=$request->old_photo;
    		 DB::table('products')->where('id',$id)->update($data);
    		 $notification=array(
                'messege'=>'Successfully product Updated',
                'alert-type'=>'success'
                 );
             return Redirect()->route('all.product')->with($notification);
    	}
    }


   


}
