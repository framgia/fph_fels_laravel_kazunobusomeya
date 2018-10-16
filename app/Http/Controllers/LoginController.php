<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use Auth;
use Validator;
use DB;
//use User;

class LoginController extends Controller
{
   
    public function loginForm(){
    	return view('login');
    }

    public function linkSignUp(){

        return view('signUp');
    }

    public function doLogin(Request $request)
    {
    // validate the info, create rules for the inputs

        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|between:5,10' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form

        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {
            // create our user data for the authentication
            $userdata = array(
                'email'     => Input::get('email'),
                'password'  => Input::get('password') 
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {


                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                

                $user_email=$request->email;
                
                $user_id=DB::table('users')->where('email',$user_email)->value('id');
                $request->session()->put('msg',$user_id);
                $sesdata=$request->session()->get('msg');
                $message='Your login was successful';

                //$user_name=current_user()->value('id');

                $id=\Auth::user()->id;
                
                

               return view('mainPage',compact('sesdata','message','id'));


            } else {         

                // validation not successful, send back to form 
                //return Redirect::to('login');
                $error="Your login resulted in failure";
                return view('login',compact('error'));

            }
        }
    }
}
?>