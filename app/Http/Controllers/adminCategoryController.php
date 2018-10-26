<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;


class adminCategoryController extends Controller{

	public function adminCategoryPage(){

		return view('adminCategory');
	}

	public function adminCategoryAdd(Request $request){

		$validate_rule=[

				'title'=>'required|between:5,20',
				'description'=>'required|between:10,100',

		];

		$this->validate($request,$validate_rule);

		$param=[

			'title'=>$request->title,
			'description'=>$request->description,

		];

		DB::table('categories')->insert($param);

		return view('adminCategory',['title'=>$request->title,'description'=>$request->description,redirect()->back()->withSuccess('Addition was successful!!')]);

	}
}
?>