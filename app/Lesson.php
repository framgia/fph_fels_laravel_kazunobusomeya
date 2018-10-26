<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{

	protected $guarded=array('id');

		public static $rules=array(


			'user_id'=>'required',
			'category_id'=>'required'

		);


    public function lesson(){

    	return $this->belongsTo('User');
    }

    public function getlesson(){

    	return $this->lesson->user_id;
    }

    public function  category(){

    	return $this->belongsTo('Category');
    }

    public function getCategory(){

    	return $this->category->category_id;
    }
}
