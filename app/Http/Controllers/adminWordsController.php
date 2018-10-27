<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;


class adminWordsController extends Controller{

	public function adminWordsPage(){

		return view('adminWords');
	}


	public function adminWordsAdd(Request $request){

		$validate_rule=[

			'question_word'=>'required|between:2,10',
		];

		$this->validate($request,$validate_rule);

	}

	public function adminChoiceAdd(Request $request){


		if(!empty($request->input('basic500'))){


			$validate1=[
				'question_word'=>'required|between:1,10',
				'option1'=>'required|between:1,10',
				'option2'=>'required|between:1,10',
				'option3'=>'required|between:1,10',
				'option4'=>'required|between:1,10',
				//'correct'=>'required',

			];

			$this->validate($request,$validate1);
			

			$question1 = [
				'category_id' =>1,
				'question_word' => $request->question_word,

			];

			DB::table('questions')->insert($question1);




			$questionId_1 = DB::table('questions')->get()->last();

			$choice_1=[

				['question_id' => $questionId_1->id,'option'=>$request->option1,'correct'=> false],
				['question_id' => $questionId_1->id,'option'=>$request->option2,'correct'=> true],
				['question_id' => $questionId_1->id,'option'=>$request->option3,'correct'=> false],
				['question_id' => $questionId_1->id,'option'=>$request->option4,'correct'=> true]
				//'correct'=>$request->correct,

			];

			DB::table('options')->insert($choice_1);

			return view('adminWords',['option'=>$request->option1,'option'=>$request->option2,'option'=>$request->option3,'option'=>$request->option4,redirect()->back()->withSuccess('Adding option was successful!')]);
	


		}elseif(!empty($request->input('restaurant'))){


			$validate2=[
				'question_word'=>'required|between:1,10',
				'option1'=>'required|between:1,10',
				'option2'=>'required|between:1,10',
				'option3'=>'required|between:1,10',
				'option4'=>'required|between:1,10',
				//'correct'=>'required',

			];

			$this->validate($request,$validate2);
			

			$question2 = [
				'category_id' =>2,
				'question_word' => $request->question_word,

			];

			DB::table('questions')->insert($question2);




			$questionId_2 = DB::table('questions')->get()->last();

			$choice_2=[

				['question_id' => $questionId_2->id,'option'=>$request->option1,'correct'=> false],
				['question_id' => $questionId_2->id,'option'=>$request->option2,'correct'=> true],
				['question_id' => $questionId_2->id,'option'=>$request->option3,'correct'=> false],
				['question_id' => $questionId_2->id,'option'=>$request->option4,'correct'=> true]
				//'correct'=>$request->correct,

			];

			DB::table('options')->insert($choice_2);

			return view('adminWords',['option'=>$request->option1,'option'=>$request->option2,'option'=>$request->option3,'option'=>$request->option4,redirect()->back()->withSuccess('Adding option was successful!')]);



		}elseif(!empty($request->input('trip'))){


			$validate3=[
				'question_word'=>'required|between:1,10',
				'option1'=>'required|between:1,10',
				'option2'=>'required|between:1,10',
				'option3'=>'required|between:1,10',
				'option4'=>'required|between:1,10',
				//'correct'=>'required',

			];

			$this->validate($request,$validate3);
			

			$question3 = [
				'category_id' =>3,
				'question_word' => $request->question_word,

			];

			DB::table('questions')->insert($question3);




			$questionId_3 = DB::table('questions')->get()->last();

			$choice_3=[

				['question_id' => $questionId_3->id,'option'=>$request->option1,'correct'=> false],
				['question_id' => $questionId_3->id,'option'=>$request->option2,'correct'=> true],
				['question_id' => $questionId_3->id,'option'=>$request->option3,'correct'=> false],
				['question_id' => $questionId_3->id,'option'=>$request->option4,'correct'=> true]
				//'correct'=>$request->correct,

			];

			DB::table('options')->insert($choice_3);

			return view('adminWords',['option'=>$request->option1,'option'=>$request->option2,'option'=>$request->option3,'option'=>$request->option4,redirect()->back()->withSuccess('Adding option was successful!')]);

		}
	}
}
?>