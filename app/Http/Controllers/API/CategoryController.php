<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Category::all();
        // $rows = Category::select('id','title')->get();
        return $rows;
    }

    // public function list($id)
    // {
    //     $rows = Category::select('id','title')->get();
    //     return $rows;
    // }

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
            'title' => 'required|string|max:200|unique:categories,title' ,
            'slug' => 'required|max:200' 
        ]);

        // new Category created
         Category::create([
            'title' => $request->get('title'),
            'slug' => $request->get('slug')
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
        // return $request->all();

        $row = Category::find($id);

        // validate with laravel in real time
        $request->validate([    
            'title' => 'required|string|max:200|unique:categories,title,'.$row->id ,
            'slug' => 'required|max:200'
        ]);

        //  Category updated
         $row->update([
            'title' => $request->get('title'),
            'slug' => $request->get('slug')
        ]);

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
        $row = Category::find($id);
        $row->delete();
        return ["message" => "Success"];
    }
}
