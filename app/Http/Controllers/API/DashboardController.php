<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Event;
use App\Slider;
use App\Contact;
use App\Video;

class DashboardController extends Controller
{
    public function index()
    {
    	$event_count = Event::count();
    	$slider_count = Slider::count();
    	$contact_count = Contact::count();
    	$video_count = Video::count();

    	$rows = ["event" => $event_count , "slider" => $slider_count , "contact" => $contact_count , "video" => $video_count];
    	return $rows;
    }
}
