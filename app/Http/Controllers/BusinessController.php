<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware("auth");
    }



    public function index()
    {
        $role = Auth::user()->getRoleNames();

        if ($role[0] == 'admin') {
            $businesses = Business::all()->reverse()->toArray();
            return view('business.index', ['businesses' => $businesses]);
        } elseif ($role[0] == 'user') {

            $businesses = Business::where('owner', Auth::id())->latest()->get()->toArray();
            return view('business.index', ['businesses' => $businesses]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $locations = Location::all()->toArray();
        $categories = Category::all()->toArray();
        return view('business.create', ['locations' => $locations, 'categories' => $categories]);
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
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'location' => 'required',
            'address' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120'
        ]);

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . request()->image->getClientOriginalExtension();
            if ($request->image->storeAs('businessImages', $fileName, 'public')) {
                $business = new Business;
                $business->name = $request->name;
                $business->phone = $request->phone;
                $business->email = $request->email;
                $business->category = $request->category;
                $business->description = $request->description;
                $business->location = $request->location;
                $business->address = $request->address;
                $business->image = $fileName;
                $business->owner = Auth::user()->id;
                if ($business->save()) {
                    return redirect(route('business.index'))->with('success', 'Business Added Successfully!');
                } else {
                    return redirect(route('business.index'))->with('error', 'Something Went Wrong !');
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $business =  Business::where('id', $id)->get()->toArray();
        return view('business.view', ['business' => $business[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Auth::user()->getRoleNames();
        $business =  Business::where('id', $id)->get()->toArray();
        $locations = Location::all()->toArray();
        $categories = Category::all()->toArray();
        if ($role[0] == 'admin') {
            return view('business.edit', ['business' => $business[0], 'locations' => $locations, 'categories' => $categories]);
        } elseif ($business[0]['owner'] == Auth::id()) {
            return view('business.edit', ['business' => $business[0], 'locations' => $locations, 'categories' => $categories]);
        } else {
            return abort(401);
        }
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
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'location' => 'required',
            'address' => 'required'
        ]);
        $business = Business::find($id);
        $business->name = $request->name;
        $business->phone = $request->phone;
        $business->email = $request->email;
        $business->category = $request->category;
        $business->description = $request->description;
        $business->location = $request->location;
        $business->address = $request->address;
        $business->approved = 0;
        if ($business->update()) {
            return redirect(route('business.index'))->with('success', 'Business Added Successfully!');
        } else {
            return redirect(route('business.index'))->with('error', 'Something Went Wrong !');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Business::destroy($id)) {
            return redirect()->back()->with('success', 'Business Deleted');
        } else {
            return redirect()->back()->with('error', 'Something Wrong!');
        }
    }

    public function approveBusiness($id)
    {
        if (!empty($id)) {
            $business = Business::find($id);
            $business->approved = true;
            if ($business->update()) {
                return redirect()->back()->with('success', 'Business Approved');
            }
        }
    }
    public function disapproveBusiness($id)
    {
        if (!empty($id)) {
            $business = Business::find($id);
            $business->approved = false;
            if ($business->update()) {
                return redirect()->back()->with('error', 'Business Disapproved');
            }
        }
    }
}
