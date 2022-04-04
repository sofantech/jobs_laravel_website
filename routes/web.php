<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('website/index');
});

Route::view('/jobs', 'website/jobs' );
Route::view('/jobdetail', 'website/jobs_details' );
Route::view('/contact', 'website/contactus' );
Route::view('/about', 'website/aboutus' );
Route::view('/login', 'website/login' );
Route::view('/signin', 'website/signIn' );
Route::view('/services', 'website/services' );
Route::view('/personalCv', 'website/personalCv' );