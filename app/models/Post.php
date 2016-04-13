<?php


//Eloquent class comes preprepared with Laravel, includes insert/update kinds of methods
class Post extends Eloquent
{
	protected $table = 'posts';

	//the rules
	public static $rules = array(
	    'title' => 'required|max:100',
	    'body' => 'required|max:10000'
    );
}