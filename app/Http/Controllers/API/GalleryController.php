<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\GalleryImage;
use File;

class GalleryController extends Controller
{
    protected $width = 300;
    protected $height = 200;

    public function __construct()
    {
        $path = public_path('/images/gallery/');
        if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true);
        }
    }


    /*
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Gallery::all();
        return $rows;
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();

        // validate with laravel in real time
        $request->validate([    
            'title' => 'required|string|max:200' ,
            'caption' => 'required|max:400' ,
            'image' => 'required'
        ]);

        // image is stored in public folder
        if($request->image){

            $image_name = time() . '.' . explode('/' , explode(':', substr($request->image, 0 , strpos($request->image, ';')))[1])[1];

            \Image::make($request->image)->resize($this->width, $this->height)
                ->save(public_path('images/gallery/').$image_name);

        }

        // new team member created
         Gallery::create([
            'title' => $request->get('title'),
            'caption' => $request->get('caption'),
            'image' => $image_name,
        ]);

         return ["message" => "Success"];

    }

    // gallery image is stored
    public function imageStore(Request $request,$id)
    {
        return $request->all();

        $request->validate([    
            'images' => 'required'
        ]);

        // image is stored in public folder
        if($request->images){

            $image_name = time() . '.' . explode('/' , explode(':', substr($request->images, 0 , strpos($request->images, ';')))[1])[1];


            $newpath = public_path('/images/gallery/',$id,'/');
            if(!File::isDirectory($newpath)){
                    File::makeDirectory($newpath, 0777, true);
            }

            \Image::make($request->images)->resize($this->width, $this->height)
                ->save(public_path('images/gallery/',$id,'/').$image_name);

        }

        GalleryImage::create([
            'gallery_id' => $id,
            'image' => $image_name
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);

        // validate with laravel in real time
        $request->validate([    
            'title' => 'required|string|max:200' ,
            'caption' => 'required|max:400' ,
            'image' => 'sometimes'
        ]);

        // if new image is uploaded saved and old removed
        if($request->image != $gallery->image){

            $image_name = time() . '.' . explode('/' , explode(':', substr($request->image, 0 , strpos($request->image, ';')))[1])[1];

            \Image::make($request->image)->resize($this->width, $this->height)->save(public_path('images/gallery/').$image_name);

            //   delete old image
            if($gallery->image){
                unlink(public_path("images/gallery/") . $gallery->image);
            }

        }

        // update team info
        $gallery->update([
            'title' => $request->get('title'),
            'caption' => $request->get('caption'),
            'image' => isset($image_name) ? $image_name : $gallery->image,
        ]);

        // return $request->all();
        return ["message" => "Updated"];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
