<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Facilities;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facilities = Facilities::all();
        return view('backend.facilities.index', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.facilities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $facility = new Facilities();
        $facility->title = $request->title;
        $facility->description = $request->description;
        uploadImage($request,$facility,"image");
        $facility->save();
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
        $facility = Facilities::find($id);
        return view('backend.facilities.edit',compact('facility'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $facility =  Facilities::find($id);
        $facility->title = $request->title;
        $facility->description = $request->description;
        uploadImage($request,$facility,"image");
        $facility->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $facility = Facilities::find($id);
        $facility->delete();
        return redirect()->back();
    }
}
