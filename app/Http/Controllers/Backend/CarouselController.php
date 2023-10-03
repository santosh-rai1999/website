<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousels = Carousel::all();
        return view('backend.carousel.index',compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $carousel = new Carousel();
        $carousel->title = $request->title;
        uploadImage($request,$carousel,"image");
        $carousel->description = $request->description;
        $carousel->save();
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
        $carousel = Carousel::find($id);
        return view('backend.carousel.edit',compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $carousel = Carousel::find($id);
        $carousel->title = $request->title;
        uploadImage($request,$carousel,"image");
        $carousel->description = $request->description;
        $carousel->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carousel = Carousel::find($id);
        $carousel->delete();
        return redirect()->back();
    }
}
