<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    
    public function create(){
      
        return view('register');

    }

    public function store(Request $request){
    $data = $this->validate($request , [

       "name"        => "required|alpha",
       "email"       => "required|email", 
       "password"    => "required|min:6",
       "address"     => "required|min:10",
       "gender"      => "required",
       "linkedIn"    => "required|url",
       "image"       => "required"   //|image
       ]);
       return view('profile',["RegisterOutPut" => $data ]);
  }        


//   public function update(Request $request)
//     {
//         $path = $request->file('avatar')->store('image');

//         return $path;
//     }

   
}
