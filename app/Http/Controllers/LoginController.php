<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Redirect;
use Auth;
use Validator;

class LoginController extends Controller
{
   
    public function loginForm(){
    	return view('login');
    }

    public function linkSignUp(){

        return view('signUp');
    }

    public function doLogin(Request $request )
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


               return redirect()->back()->with('message','Your login was successful');

               //return redirect('dashboard');


            } else {         

                // validation not successful, send back to form 
                //return Redirect::to('login');
                return redirect()->back()->with('message','Email or password is wrong');

            }
        }
    }


    public function ses_get(Request $request){

        
        $sesdata=$request->session()->get('msg');
        return view('login',['session_data'=>$sesdata]);
    } 
    
    public function ses_put(Request $request){

        $msg=$request->email;
        $request->session()->put('msg',$msg);
        return redirect('login');
        


    }
}
?>