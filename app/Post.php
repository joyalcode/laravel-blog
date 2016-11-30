<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','post','status'];  
    
    public function user()
    {
    	return $this->BelongsTo("App\User");
    }

    public function comments()
    {
    	return $this->hasMany('App/Comments');
    }
}
