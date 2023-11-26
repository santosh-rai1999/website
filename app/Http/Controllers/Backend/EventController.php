<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $event = Events::all();
       return view('backend.event.index',compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $event = new Events();
        $event->title = $request->title;
        $event->description = $request->description;
        uploadImage($request,$event,"image");
        $event->date = $request->date;
        $event->save();
        return redirect()->back();



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Events::find($id);
        return view('backend.event.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd($request->all());
        $event = Events::find($id);
        $event->title = $request->title;
        $event->description = $request->description;
        uploadImage($request,$event,"image");
        $event->date = $request->date;
        $event->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Events::find($id);
        $event->delete();
        return redirect()->back();
    }
}
