<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function login(Request $request){
      //  return $request->email;
        
   $user =    User::where('email',$request->email)->first();
   if(!$user || !hash::check($request->password,$user->password) )
   {
       return "Invalid credincial !";
   }
   else
   {
     $request->session()->put("user",$user);
    return redirect("/product");
   }
       
    }
}
