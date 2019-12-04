<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;
use LaravelVideoEmbed;
use File;

class VideoController extends Controller
{

    public function __construct()
    {
        $path = public_path('/images/video/');
        if(!File::isDirectory($path)){
                File::makeDirectory($path, 0777, true);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Video::all();
        return $rows;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'title' => 'required|string|max:250' ,
            'url' => 'required|max:200' ,
            'body' => 'sometimes|max:250' ,
            'image' => 'sometimes'
        ]);

        // image is stored in public folder
        // if optinal image is selected else youtube photo will be used
        if($request->image != null){

            $image_name = time() . '.' . explode('/' , explode(':', substr($request->image, 0 , strpos($request->image, ';')))[1])[1];

            \Image::make($request->image)->resize(300, 200)->save(public_path('images/video/').$image_name);

        }else{

           $image_src = LaravelVideoEmbed::getYoutubeThumbnail($request->get('url'));
            $filename = rand(1000,9000).'_'.basename($image_src);
            // dd($filename);
            \Image::make($image_src)->save(public_path('images/video/' . $filename));

        }

        // new vido created
         Video::create([
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'body' => $request->get('body'),
            'image' => $request->image ? $image_name : $filename,
        ]);

         return ["message" => "Success"];
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
        $video = Video::find($id);

        // validate with laravel in real time
        $request->validate([    
            'title' => 'required|string|max:250|unique:videos,title,'.$video->id ,
            'url' => 'required|max:200' ,
            'body' => 'sometimes|max:250' ,
            'image' => 'sometimes'
        ]);

        // if url is changed new video poster/image is saved
        if(($request->get('url') != $video->url) && ($request->get('image') == $video->image))
        {

                 // return $request->all();
                // video libarary to store image
                $image_src = LaravelVideoEmbed::getYoutubeThumbnail($request->get('url'));
                 $filename = rand(1000,9000).'_'.basename($image_src);
                 // dd($filename);
                 \Image::make($image_src)->save(public_path('images/video/' . $filename));

                 //   delete old image
                 if($video->image){
                     unlink(public_path("images/video/") . $video->image);
                 }

                 $video->update(['image' => $filename]);
                 
        }

        // if new image is uploaded saved and old removed
        else if($request->image != $video->image){

            $image_name = time() . '.' . explode('/' , explode(':', substr($request->image, 0 , strpos($request->image, ';')))[1])[1];

            \Image::make($request->image)->resize(300, 200)->save(public_path('images/video/').$image_name);

           
            //   delete old image
            if($video->image){
                unlink(public_path("images/video/") . $video->image);
            }

            $video->update(['image' => $image_name]);

        } else{

            // update video info
            $video->update([
                'image' =>  $video->image
            ]);
        }

        $video->update([
            'title' => $request->get('title'),
            'url' => $request->get('url'),
            'body' => $request->get('body') ?  $request->get('body') : ''
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
        $video = Video::find($id);

        if($video->image){
                unlink(public_path("images/video/") . $video->image);
        }
        
        $video->delete();
        return ["message" => 'Success'];
    }
}
