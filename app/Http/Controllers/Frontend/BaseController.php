<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Carousel;
use App\Models\Events;
use App\Models\Facilities;
use App\Models\Gallery;
use App\Models\Notice;
use App\Models\Staff;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $about = About::first();
        $carousel = Carousel::all();
        $staffs = Staff::all();
        $facilities = Facilities::all();
        $notices = Notice::all();
        $galleries = Gallery::all();
        $gallery_images = Gallery::all();
        $events = Events::all();



        View::share([
            'about' => $about,
            'staffs' => $staffs,
            'facilities' => $facilities,
            'notices' => $notices,
            'galleries' => $galleries,
            'carousel' => $carousel,
            'events' => $events,

        ]);
    }
}
