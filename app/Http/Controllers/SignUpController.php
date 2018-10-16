<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class SignUpController extends Controller
{
    
    public function design(Request $request){
    	return view('signUp');
    }


    public function signUp(Request $request){
    	$validate_rule=[

    		'name'=>'required|between:2,20|unique:users',
    		'email'=>'required|unique:users',
    		'password'=>'required|between:5,10',
    		'avatar'=>'required|image|mimes:jpeg,png,jpg,gif|max:3000',


    	];
    	$this->validate($request,$validate_rule);

    	$param=[

    		'name'=>$request->name,
    		'email'=>$request->email,
    		'password'=>$request->password,
    		'avatar'=>$request->avatar,
    	];

    	DB::table('users')->insert($param);

    	$image=$request->file('avatar');
    	$new_name=rand() . '.' . $image->getClientOriginalExtension();
    	$image->move(public_path("images"),$new_name);

    	return view('signUp',['name'=>$request->name,'email'=>$request->email,'password'=>$request->password,'avatar'=>$request->avatar,redirect()->back()->withSuccess('Registrarion successfully!')]);
    }   	
}
