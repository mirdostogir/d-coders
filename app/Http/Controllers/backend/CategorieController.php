<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categorie;
use App\SubCategorie;
use DB;
class CategorieController extends Controller
{
    public function index()
    
    {
        $categories = DB::table('categories')->paginate(10);
        $sub_categories = DB::table('sub_categories')->get();
        
        return view('backend.pages.admin.index',compact('categories','sub_categories'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
          
        ]);
  
        $categories = Categorie::create($request->all());
       if ($categories) {
    
        $notification=array(
            'messege'=>'Successfully categories Create !',
            'alert-type'=>'success'
             );
            }
   
            return Redirect()->back()->with($notification);
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    
    {
        $categories = Categorie::findOrFail($id);
        
        return view('backend.pages.admin.edit',compact('categories'));
    }
    
  
   
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function UpdateCategories(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
  

        $data=array();
        $data['name']=$request->name;
        $data['detail']=$request->detail;
        DB::table('categories')->where('id',$id)->update($data);
        if ($data) {
        $notification=array(
            'messege'=>'Successfully categories Update !',
            'alert-type'=>'success'
             );
         return Redirect()->back()->with($notification);

    }
   } 
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Categorie::findOrFail($id);
        $categories->delete();
        $delete=DB::table('categories')->where('id',$id)->delete();
    	if ($categories) {
    
    		$notification=array(
                'messege'=>'Successfully categories Deleted !',
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
}
