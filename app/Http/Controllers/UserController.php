<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Exception\NotReadableException;
use Auth;
use Image;
use App\User;
use DB;
use Cache;


class UserController extends Controller
{
    public function admin_profile(){
        return view('backend/pages/admin/admin_profile', array('user' => Auth::user()) );
    }

    public function user_profile(){
        return view('backend/pages/admin/user_profile', array('user' => Auth::user()) );
    }
   
 
   
       public function update_account(Request $request){
        if($request->hasFile('avatar')){
          
            $user = Auth::user();
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
            $user->avatar = $filename;
           
            //$user->password = \Hash::make($request->input('password'));
       
         
           }
           $user = Auth::user();
           $user->name = request()->input('name');
           $user->email =  request()->input('email');
         
           $user->save();
             // dd($user);
           return view('backend/pages/admin/admin_profile')->withUser($user);
          
        }

        public function userOnlineStatus()
        {
            $users = DB::table('users')->get();
    
            foreach ($users as $user) {
                if (Cache::has('user-is-online-' . $user->id))
                    echo "User " . $user->name . " is online.";
                else
                    echo "User " . $user->name . " is offline.";
            }
        }


}