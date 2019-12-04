<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    	protected $table = "galleries";
        protected $fillable = ['title','caption','image'];

        public function gallery_images()
        {
        	return $this->hasMany('App\GalleryImage');
        }
}
