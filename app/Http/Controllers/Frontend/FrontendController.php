<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Events;
use App\Models\Facilities;
use App\Models\Gallery;
use App\Models\Notice;
use App\Models\Staff;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class FrontendController extends BaseController
{
    public function about()
    {

        return view('frontend.about');
    }
    public function home()
    {

        return view('frontend.index');
    }
    public function staff()
    {
        $staffs = Staff::all();
        return view('frontend.staff',compact('staffs'));
    }

    public function notice()
    {
        $notices = Notice::all();
       return view('frontend.notice',compact('notices'));
    }
    public  function facility()
    {
        $facilities = Facilities::all();
        return view('frontend.facility',compact('facilities'));
    }
    public function galleries()
    {
        $galleries = Gallery::all();
        return view('frontend.gallery',compact('galleries'));
    }
    public function gallery($id)
    {
     $gallery = Gallery::find($id);
     $gallery_images = $gallery->gallery_images;
     return view('frontend.singlegallery',compact('gallery_images'));
    }
    public function gallery_images()
    {
        $gallery_images = Gallery::all();
        return view('frontend.gallery',compact('gallery_images'));
    }
    public function events()
    {
        $events = Events::all();
        return view('frontend.event',compact('events'));
    }
}
