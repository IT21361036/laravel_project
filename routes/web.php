<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('listings', [
        'heading'=>'Latest Listings',
        'listings' => Listing::all()
        ]);
});

Route::get('/listings/{listing}', function(Listing $listing){ 
    // $listing = Listing::find($id);

    return view('listing',[
        'listing' => $listing
    ]);
  
});

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

