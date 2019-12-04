<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menubuilder;

class MenubuilderController extends Controller
{

	public function index()
	{
		$rows = Menubuilder::all();
		return $rows;
	}

    public function store(Request $request)
    {
    	// return $request->all();

    	// validate with laravel in real time
    	$request->validate([    
    	    'title' => 'required|string|max:200' ,
    	    'slug' => 'required|max:200|unique:menubuilders' 
    	]);

    	// new Category created
    	 Menubuilder::create([
    	    'title' => $request->get('title'),
    	    'slug' => $request->get('slug'),
    	    'order' => $request->get('id')
    	]);

    	 return ["message" => "Success"];

    }

    public function sortOrder(Request $request)
    {
    	// return $request->all();
    	Menubuilder::truncate();

    	foreach($request->all() as $menu){
    		Menubuilder::create([

    			'id' => $menu['id'] ,
    			'order' => $menu['order'],
    			'title' => $menu['title'],
    			'slug' => $menu['slug'],

    		]);
    	}

    	return ["message" => "Success"];
    }

    public function delete($id)
    {
    	$row = Menubuilder::find($id);
    	$row->delete();
    	return ["message" => 'Success'];
    }
}
