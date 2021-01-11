<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {
        $businesses = Business::where('approved', 1)->latest()->take(8)->get()->toArray();
        $locations = Location::all()->reverse()->toArray();
        $categories = Category::all()->toArray();
        return view('frontend.index', ['businesses' => $businesses, 'locations' => $locations, 'categories' => $categories]);
    }


    public function detailedBusiness($id)
    {
        $business =  Business::where('id', $id)->get()->toArray();
        $loc = $business[0]['location'];
        $related = Business::where('location', $loc)->where('approved', 1)->latest()->take(3)->get()->toArray();
        if (empty($related)) {
            $related = Business::where('approved', 1)->latest()->take(3)->get()->toArray();
        }

        return view('frontend.singlebusiness', ['business' => $business[0], 'relatedBusinesses' => $related]);
    }

    public function searchBusiness(Request $request)
    {
        $categories = Category::all()->toArray();
        switch ($request) {
            case (empty($request->category) && (!empty($request->location) && (!empty($request->keyword)))):
                $businesses = Business::where('approved', 1)->where('location', $request->location)->where('name', 'LIKE', '%' . $request->keyword . '%')->latest()->paginate(8);
                return view('frontend.businesslist', ['categories' => $categories, 'businesses' => $businesses]);
                break;
            case (!empty($request->category) && (empty($request->location) && (!empty($request->keyword)))):
                $businesses = Business::where('approved', 1)->where('category', $request->category)->where('name', 'LIKE', '%' . $request->keyword . '%')->latest()->paginate(8);
                return view('frontend.businesslist', ['categories' => $categories, 'businesses' => $businesses]);
                break;
            case (empty($request->category) && (empty($request->location) && (!empty($request->keyword)))):
                $businesses = Business::where('approved', 1)->where('name', 'LIKE', '%' . $request->keyword . '%')->latest()->paginate(8);
                return view('frontend.businesslist', ['categories' => $categories, 'businesses' => $businesses]);
                break;
            default:
                return route('index');
        }

        return view('frontend.businesslist', ['categories' => $categories]);
    }


    public function allBusiness()
    {
        $categories = Category::all()->toArray();

        $businesses = Business::where('approved', 1)->latest()->paginate(8);
        return view('frontend.allBusiness', ['categories' => $categories, 'businesses' => $businesses]);
    }
}
