<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

	protected $guarded=array('id');

		public static $rules=array(

			'category_id'=>'required',
			'question_word'=>'required'

		);


	public function category(){

		return $this->belongsTo('Category');

	}

	public function getDate(){

		return $this->category->category_id;

	}

	public function option(){

		return $this->hasMany('Option');
	}
	
	/*public function getOption(){

		return $this->option->getOption();
	}*/
    //
	
}
