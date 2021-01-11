<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/all', [FrontendController::class, 'allBusiness'])->name('allBusiness');

Route::get('/about', function () {
    return view('frontend.aboutus');
});
Route::get('/contact', function () {
    return view('frontend.contactus');
});
Route::get('/list', function () {
    return view('frontend.businesslist');
});

Route::post('/search', [FrontendController::class, 'searchBusiness'])->name('search');


Route::get('/signin', function () {
    return view('frontend.sign-in');
})->name('signin');
Route::get('/signup', function () {
    return view('frontend.sign-up');
})->name('signup');


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dash');

Route::resource('user', 'UserController')->middleware('role:admin');
Route::resource('permission', 'PermissionController')->middleware('role:admin');
Route::resource('role', 'RoleController')->middleware('role:admin');
Route::resource('category', 'CategoryController')->middleware('role:admin');
Route::resource('location', 'LocationController')->middleware('role:admin');
Route::resource('business', 'BusinessController');
Route::post('/approve/{id}', [BusinessController::class, 'approveBusiness'])->name('approveBusiness');
Route::post('/disapprove/{id}', [BusinessController::class, 'disapproveBusiness'])->name('disapproveBusiness');



Route::get('/detail/{id}', [FrontendController::class, 'detailedBusiness'])->name('detail');
Route::post('/createRole', 'RoleController@createRole');
Route::get('/profile', 'UserController@profile')->name('user.profile');
Route::post('/profile', 'UserController@updateProfile')->name('user.updateProfile');
Auth::routes();


// Axios Requests
Route::get('/getAllPermission', 'PermissionController@getAllPermissions');
Route::get("/getAllUsers", "UserController@getAll");
Route::get("/getAllRoles", "RoleController@getAll");
Route::get("/getAllPermissions", "PermissionController@getAll");

/////////////axios create user
Route::post('/account/create', 'UserController@store');
