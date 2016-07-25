<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Country; 
use \App\User;

class HomeController extends Controller
{
    
    public function index()
    {

    	return view('index');
    }


    /* sign up */

    public function signUp(Request $request)
    {
      

    	$validator = $this->validate($request, [
       
           'fname' 			 => 'required|min:2',
           'lname'		     => 'required|min:2',
           'dob' 			 => 'required',
           'phones' 			 => 'required|regex:/^\d*(\.\d{2})?$/',
           'nation'		     => 'required',
           'lang'            => 'required',
           'accept_policy'   => 'accepted',
           'subscribed' 	 => 'accepted',
           'confirmed' 		 => 'accepted',
           'email'  		 => 'required|email|unique:users',
           'password' 		 => 'required|confirmed|min:6',
           'password_confirmation' 		 => 'required'

    
        ]);


    	User::create($request->all())->save();

    	return response()->json(['data'=>'lol']);
    }

}