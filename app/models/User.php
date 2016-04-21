<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	const ADMIN = 1;
	const STANDARD = 2;

	public static $rules = array(
	    'first_name' => 'required|max:100',
	    'last_name' => 'required|max:100',
	    'username' => 'required|max:100',
	    'email' => 'required|max:1000',
	    'password' => 'required|max:100',
	    // 'profile_img' => 'required|max:100'
    );

    public static $loginRules = array(
    		'email' => 'required',
	    	'password' => 'required',
    	);

    public static $updateRules = array(
    	'first_name' => 'required|max:100',
	    'last_name' => 'required|max:100',
	    'email' => 'required|max:1000',
    	);
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function posts()
	{
		return $this->hasMany('Post');
	}

	public function setPasswordAttribute($value) {
		$this->attributes['password'] = Hash::make($value);
	}

	public function fullName() {
		return $this->first_name . " " . $this->last_name;
	}

	public function isNotAdmin(){
		return $this->role_id == User::STANDARD;
	}
}
