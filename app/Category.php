<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = "categories";
    
    protected $fillable = ['title','slug'];

    public function events()
    {
        return $this->belongsToMany('App\Event' , 'category_event','category_id','event_id')->select(['event_id', 'category_id']);
    }
}
