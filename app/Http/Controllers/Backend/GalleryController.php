<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallerys = Gallery::all();
        return view('backend.gallery.index',compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gallery = new Gallery();
        $gallery->title = $request->title;
        uploadImage($request,$gallery,"image");
        $gallery->save();
        foreach($request->images as $index=>$image){
            $gi = new GalleryImage(); $gi->gallery_id = $gallery->id; $file = $image;
            $newName = time() . "_" . $index . "." . $file->getClientOriginalExtension();
            $file->move('images',$newName);
            $gi->name = "images/$newName";
            $gi->save();
        }
        return redirect()->back(); }
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
        $gallery = Gallery::find($id);
        return view('backend.gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gallery = Gallery::find($id);
        $gallery->title = $request->title;
        uploadImage($request,$gallery,"image");
        $gallery->date = $request->date;
        $gallery->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->back();
    }
}
