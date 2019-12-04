<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Category;
use File;

class EventController extends Controller
{

    public function __construct()
    {
        $path = public_path('/images/event/');
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
        $events = Event::paginate(1);
        return $events;
    }


    public function list($id)
    {
      $row = Event::find($id);
      $list = $row->categories;
      $list = $list->pluck("category_id");
      return $list;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

              'name' => 'required|string|max:200|unique:events' ,
              'slug' => 'required|max:200' ,
              'location' => 'required',
              'date' => 'required|date',
              'price' => 'required',
              'description' => 'required',
              'organizer' => 'required',
              'image' => 'required',
              'category' => 'required'
              
          ]);

          // image is stored in public folder
          if($request->image){

              $image_name = time() . '.' . explode('/' , explode(':', substr($request->image, 0 , strpos($request->image, ';')))[1])[1];

              \Image::make($request->image)->resize(300, 200)->save(public_path('images/event/').$image_name);

          }

          // new Event created
          $row = Event::create([
              'name' => $request->get('name'),
              'slug' => $request->get('slug'),
              'location' => $request->get('location'),
              'date' => $request->get('date'),
              'price' => $request->get('price'),
              'description' => $request->get('description'),
              'organizer' => $request->get('organizer'),
              'image' => $image_name,
          ]);

          // pivot table data inserted
          $row->categories()->attach($request->get('category'));

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
        $row = Event::find($id);
        return $row;
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
        $event = Event::find($id);

        // validate with laravel in real time
          $request->validate([    

              'name' => 'required|string|max:200|unique:events,name,'.$event->id ,
              'slug' => 'required|max:200' ,
              'location' => 'required',
              'date' => 'required|date',
              'price' => 'required',
              'description' => 'required',
              'organizer' => 'required',
              'image' => 'sometimes',
              'category' => 'required'
              
          ]);


        // if new image is uploaded, saved and old removed
        if($request->image != $event->image){

            $image_name = time() . '.' . explode('/' , explode(':', substr($request->image, 0 , strpos($request->image, ';')))[1])[1];

            \Image::make($request->image)->resize(300, 200)->save(public_path('images/event/').$image_name);

            //   delete old image
            if($event->image){
                unlink(public_path("images/event/") . $event->image);
            }

        }

        // new Event created
         $event->update([
            'name' => $request->get('name'),
            'slug' => $request->get('slug'),
            'location' => $request->get('location'),
            'date' => $request->get('date'),
            'price' => $request->get('price'),
            'description' => $request->get('description'),
            'organizer' => $request->get('organizer'),
            'image' => isset($image_name) ? $image_name : $event->image,
        ]);

          $event->categories()->sync($request->get('category'));


         return ["message" => "Success"];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Event::find($id);

        if($row->image){
          unlink(public_path("images/event/") . $row->image);
        }

        // ------ delete pivot table entries ------------
        $row->categories()->detach($row->id);
        $row->delete();

    }
}
