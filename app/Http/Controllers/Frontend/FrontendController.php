<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Staff;
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
        // $staffs = Staff::all();
        return view('frontend.staff');
    }

    public function notice()
    {
       return view('frontend.notice');
    }
}
