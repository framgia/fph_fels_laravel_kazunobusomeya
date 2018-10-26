<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;


class userSettingsController extends Controller{

	public function userEditProfile(){

		return view('userEditProfile');
	}

	public function edit(Request $request){


		$id=\Auth::user()->id;
		$item=DB::table('users')
			->where('id',$id)->first();
		return view('userEditProfile',['item'=>$item]);

	}


	public function update(Request $request){

		$validate_rule=[

			'name'=>'required|between:2,20',
    		'email'=>'required',
    		'password'=>'required|between:5,10',
    		'avatar'=>'required|image|mimes:jpeg,png,jpg,gif|max:3000',

		];

		$this->validate($request,$validate_rule);

		$param=[

			'name'=>$request->name,
			'email'=>$request->email,
			'password'=>Hash::make($request->password),
			'avatar'=>$request->avatar,

		];

		DB::table('users')
			->where('id',$request->id)
			->update($param);

		$image=$request->file('avatar');
		$new_name=rand() . '.' . $image->getClientOriginalExtension();
		$image->move(public_path('image'),$new_name);

		return redirect('userEditProfile');

		//return redirect('userEditProfile',['name'=>$request->name,'email'=>$request->email,'password'=>Hash::make($request->password),'avatar'=>$request->avatar,redirect()->back()->withSuccess('Update successfully!')]);

	}
}
?>