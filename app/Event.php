<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

	protected $table = "events";

    
    protected $fillable = ['name','slug','location','date','price','organizer','image','description'];

    public function categories()
   {
       return $this->belongsToMany('App\Category' , 'category_event','event_id','category_id')->select(['event_id', 'category_id']);
   }
}
