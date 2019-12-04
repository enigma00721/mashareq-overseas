<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    protected $view_path = "frontend.";


    public function contactUs()
    {
        return view($this->view_path . 'contactus');
    }

    public function procedure()
    {
        return view($this->view_path . 'procedure');
    }

    public function documentaion()
    {
        return view($this->view_path . 'documentation');
    }
    
}
