<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   
    public function login(){
    	return view('login.login');
    }

    public function post(Request $request){
    	
    	$validate_rule=[
    	
    		'name' => 'required|max:10',
    		'password' => 'required|max:8',

    	];
    	$this->validate($request,$validate_rule);
    	return view('login.post',['name'=>$request->name,'password'=>$request->password]);
    }

    public function messages(){
    	return[

    		

    	];
    }

}
