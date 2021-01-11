<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = Location::all()->reverse()->toArray();

        return view('location.index', ['locations' => $locations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("location.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'pincode' => 'required|numeric|digits:6',
            'name' => 'required'
        ]);

        $location = new Location;
        $location->name = $request->name;
        $location->pincode = $request->pincode;
        $location->save();
        return redirect()->route('location.index')->with('success', 'Location Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::where('id', $id)->get()->toArray();
        return view('location.edit', ['location' => $location]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'pincode' => 'required|numeric|digits:6',
            'name' => 'required'
        ]);

        $location = Location::find($id);
        $location->name = $request->name;
        $location->pincode = $request->pincode;
        $location->update();

        return redirect(route('location.index'))->with('success', 'Location Updated..!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Location::destroy($id)) {
            return redirect(route('location.index'));
        } else {
            return redirect()->back()->with('error', 'Something Wrong!');
        }
    }
}
