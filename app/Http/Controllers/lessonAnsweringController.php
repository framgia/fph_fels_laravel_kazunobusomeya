<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class lessonAnsweringController extends Controller{


	public function dashboard(){

		return view("dashboard");
	}


	public function categoryOption(){

		return view("categoryOption");
	}

	public function categoryDisplay(Request $request){

		$items=DB::table('categories')->get();
		return view('categoryOption',['items'=>$items]);
	}


	public function answerPage(){

		return view("answerQuestion");

	}

	public function lessonRecord(Request $request){



		if(!empty($request->input('category1'))){


			//insert lesson record into lesson table
			$userId_1=\Auth::user()->id;
			$categoryId_1=DB::table('categories')->where('id',1)->value('id');
			$lesson_1=[
	 
				'user_id'=>$userId_1,
				'category_id'=>$categoryId_1

			];

			DB::table('lessons')->insert($lesson_1);


			//Retrieve question_word and options
			$questionId_1=DB::table('questions')->where('category_id',1)->pluck('id');


			$questions_1=DB::table('questions')->where('category_id',1)->paginate(1);
			
			$options_1=DB::table('options')->where('question_id',$questionId_1)->paginate(4);


				return view("answerQuestion",compact('questions_1','options_1'));



		}elseif(!empty($request->input('category2'))){


			//insert lesson record into lesson table
			
			$userId_2=\Auth::user()->id;
			$categoryId_2=DB::table('categories')->where('id',2)->value('id');

			$lesson_2=[
	 
				'user_id'=>$userId_2,
				'category_id'=>$categoryId_2

			];

			DB::table('lessons')->insert($lesson_2);


			//Retrieve question_word and options
			
			$questionId_2=DB::table('questions')->where('category_id',2)->pluck('id');

			$questions_2=DB::table('questions')->where('category_id',2)->paginate(1);
			$options_2=DB::table('options')->where('question_id',$questionId_2)->paginate(4);


				return view("answerQuestion",compact('questions_2','options_2'));



		}elseif(!empty($request->input('category3'))){

			//insert lesson record into lesson table

			$userId_3=\Auth::user()->id;
			$categoryId_3=DB::table('categories')->where('id',3)->value('id');

			$lesson_3=[
	 
				'user_id'=>$userId_3,
				'category_id'=>$categoryId_3

			];

			DB::table('lessons')->insert($lesson_3);

			//Retrieve question_word and options
			
			$questionId_3=DB::table('questions')->where('category_id',3)->value('id');


			$questions_3=DB::table('questions')->where('category_id',3)->simplePaginate(1);
			
			$options_3=DB::table('options')->where('question_id',$questions_3)->paginate(4);


				return view("answerQuestion",compact('questions_3','options_3'));
		}
	}







	public function learnedWords(){

		return view("learnedWords");
	}

	public function userEditProfile(){

		return view("userEditProfile");
	}




}
?>