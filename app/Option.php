<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

	protected $guarded=array('id');

		public static $rules=array(

			'question_id'=>'required',
			'option'=>'required',
			'correct'=>'required'
		);


		public function question(){

			return $this->belongsTo('Question');

		}

		public function getData(){

			return $this->question->question_id;

		}
    //
}
