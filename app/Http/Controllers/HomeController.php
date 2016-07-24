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

    	$this->validate($request, [
       
           'fname' 			 => 'required|min:2',
           'lname'		     => 'required|min:2',
           'dob' 			 => 'required',
           'phone' 			 => 'required|regex:/^\d*(\.\d{2})?$/',
           'nation'		     => 'required',
           'lang'            => 'required',
           'accept_policy'   => 'required',
           'subscribed' 	 => 'required',
           'confirmed' 		 => 'required',
           'email'  		 => 'required|email|unique:users',
           'password' 		 => 'required|confirmed|min:6',
           'password_confirmation' 		 => 'required'

    
        ]);


    	User::create($request->all())->save();

    	return redirect()->back()->withErrors()->withInput();
    }

}