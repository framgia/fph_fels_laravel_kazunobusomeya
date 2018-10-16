<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $guarded=array('id');

        public static $rules=array(

            'name'=>'required',
            'avatar'=>'required',
            'email'=>'required',
            'password'=>'required'
            
        );

    public function user(){

        return $this->hasOne('Lesson');
    }

    public function followed(){

        return $this->hasMany('Follow');
    }

    public function follower(){

        return $this->hasMany('Follow');
    }

}
