<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

	class Books extends Model
	{
	    //
	    protected $fillable = ['name','category','description','published_on'];
	}