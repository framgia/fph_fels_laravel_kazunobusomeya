<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{

	protected $guarded=array('id');

		public static $rules=array(

			'question_id'=>'required',
			'option_id'=>'required',
			'lesson_id'=>'required'

		);

	public function lesson_1(){

		return $this->belongsTo('Lesson');
	}

	public function getlesson_1(){

		return $this->lesson_1->lesson_id;
	}

	public function question_1(){

		return $this->belongsTo('Question');
	}

	public function getquestion_1(){

		return $this->question_1->question_id;
	}

	public function option_1(){

		return $this->belongsTo('Option');
	}

	public function getoption_1(){

		return $this->option_1->option_id;
	}
    //
}
