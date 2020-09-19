<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SubCategorie;
use App\Categorie;

use DB;

class SubCategorieController extends Controller
{


    public function index()
    
    {
        $categories = DB::table('categories')->get();
        $sub_categories = DB::table('sub_categories')->get();
       
       $sub_categories = SubCategorie::with('categories')->paginate(10);
      
        
        return view('backend.pages.admin.subindex',compact('sub_categories','categories'));
    }


    public function substore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'categorie_id' =>'required'
          
        ]);
  
       
        $data=array();
    	$data['name']=$request->name;
        $data['categorie_id']=$request->categorie_id;
        DB::table('sub_categories')->insert($data);

   
            return Redirect()->back();
    }


   
    public function edit( $id)
    
    {
        $categories = DB::table('categories')->get();
       
    	$sub_categories=DB::table('sub_categories')->where('id',$id)->first();
      
        
        return view('backend.pages.admin.subedit',compact('sub_categories','categories'));
    }


    public function UpdateSubCategories(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'categorie_id' => 'required',
        ]);
  

        $data=array();
        $data['name']=$request->name;
        $data['categorie_id']=$request->categorie_id;
        DB::table('sub_categories')->where('id',$id)->update($data);
        if ($data) {
        $notification=array(
            'messege'=>'Successfully sub categories Update !',
            'alert-type'=>'success'
             );
         return Redirect()->back()->with($notification);

    }
   } 




    public function destroy($id)
    {
        $sub_categories = SubCategorie::findOrFail($id);
        $sub_categories->delete();
        $delete=DB::table('sub_categories')->where('id',$id)->delete();
    	if ($sub_categories) {
    
    		$notification=array(
                'messege'=>'Successfully sub categories Deleted !',
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

