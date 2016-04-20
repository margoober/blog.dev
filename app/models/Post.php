<?php


//Eloquent class comes preprepared with Laravel, includes insert/update kinds of methods
class Post extends BaseModel
{
	protected $table = 'posts';

	//the rules
	public static $rules = array(
	    'title' => 'required|max:100',
	    'body' => 'required|max:10000',
	    'img' => 'max:30000|mimes:jpeg,png,gif,jpg'
    );

    public function user()
    {
    	return $this->belongsTo('User');
    }

    public function isAuthor($user) {
    	return $this->user_id == $user->id;
    }
}