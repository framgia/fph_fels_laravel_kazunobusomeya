<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminCategory extends Model
{
    protected $guarded=array('id');

    	public static $rules=array(

    		'title'=>'required',
    		'description'=>'required'

    	);

    public function lesson_category(){

    	$this->hasOne('Lesson');

    }

    public function question_category(){

    	$this->hasMany('Question');
    }


}
