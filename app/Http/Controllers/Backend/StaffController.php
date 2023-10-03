<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('backend.staff.index',compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $staff = new Staff();
        $staff->staff_id = $request->staff_id;
        $staff->name = $request->name;
        uploadImage($request,$staff,"image");
        $staff->qualification = $request->qualification;
        $staff->facebook = $request->facebook;
        $staff->instagram = $request->instagram;
        $staff->youtube = $request->youtube;
        $staff->save();
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
        $staff = Staff::find($id);
        return view('backend.staff.edit',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $staff =Staff::find($id);
        $staff->staff_id = $request->staff_id;
        $staff->name = $request->name;
        uploadImage($request,$staff,"image");
        $staff->qualification = $request->qualification;
        $staff->facebook = $request->facebook;
        $staff->instagram = $request->instagram;
        $staff->youtube = $request->youtube;
        $staff->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $staff =Staff::find($id);
        $staff->delete();
        return redirect()->back();
    }
}
