<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class followings extends Model
{
    
    protected $guarded=array('id');

    	public static $rules=array(

    		'followed_id'=>'required',
    		'follower_id'=>'required'

    	);

    public function user_followed(){

    	return $this->belongsTo('User');

    }

    public function getUser_followed(){

    	return $this->user_followed->id;
    }

    public function user_follower(){

    	return $this->belongsTo('User');
    }

    public function getUser_follower(){

    	return $this->user_follower->id;
    }
}
