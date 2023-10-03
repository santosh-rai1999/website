<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Carousel;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $about = About::first();
        $carousel = Carousel::all();
        $staffs = Staff::all();


  View::share([
  'about'=>$about,
  'staffs'=> $staffs,
  ]);
}
}
