<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Admission;
use App\Models\Events;
use App\Models\Facilities;
use App\Models\Gallery;
use App\Models\Notice;
use App\Models\Staff;
use App\Models\User;
use App\Notifications\EmailNotification;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

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

    public function admission()
    {
        // return 'hi';
        return view('frontend.admission');
    }

    public function postadmission(Request $request)
    {

        $admission = new Admission();
        $admission->first_name = $request->first_name;
        $admission->middle_name = $request->middle_name;
        $admission->last_name = $request->last_name;
        $admission->email = $request->email;
        $admission->contact = $request->contact;
        $admission->permanent_address = $request->permanent_address;
        $admission->temporary_address = $request->temporary_address;
        $admission->guardian_name = $request->guardian_name;
        $admission->grade = $request->grade;
        $admission->save();
        $user = User::first();
        $data=[
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'contact' => $request->contact,
            'permanent_address' => $request->permanent_address,
            'temporary_address' => $request->temporary_address,
            'guardian_name' => $request->guardian_name,
            'grade'=> $request->grade,
        ];
        // return $user;
        Notification::send($user,new EmailNotification($data));
        return redirect()->back();


    }


}
