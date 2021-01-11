<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::count();
        $location = Location::count();
        $business = Business::count();
        $approved = Business::where('approved', 1)->count();
        $notApproved = Business::where('approved', 0)->count();
        $users = User::count();
        return view('home', [
            'category' => $category,
            'location' => $location,
            'business' => $business,
            'users' => $users,
            'approved' => $approved,
            'notApproved' => $notApproved
        ]);
    }
}
