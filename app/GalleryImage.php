<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    	protected $table = "gallery_images";
        protected $fillable = [ 'gallery_id' ,'image'];

        public function gallery()
        {
        	return $this->belongsTo('App\Gallery');
        }
}
