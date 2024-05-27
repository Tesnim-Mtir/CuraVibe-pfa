<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Hash;
class AdminController extends Controller
{
      public function dashboard(){
        return view('admin.dashboard');
    }   
    public function profile(){
        return view('admin.profile');
    }
    public function updateProfile(Request $request){
        //validate the request 
     //   dd($request);
     Auth::user()->name=$request->name;
     Auth::user()->email=$request->email;
     //if($request->password){
     Auth::user()->password= $request->password;
    // }
     Auth::user()->update();
     return redirect('/admin/profile')->with('success','Your Profile has been updated successfully!');
   }


  
   

}

