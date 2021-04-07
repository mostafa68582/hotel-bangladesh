<?php

use Illuminate\Support\Facades\Route;
use App\model\facilities;
use App\model\RoomType;

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

/*Auth::routes();*/

Auth::routes();

Route::get('/', function () {
    return view('frontend.home');
})->name('frontend.home');

Route::get('/backend', function () {
    return view('backend.master');
})->name('backend.home');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/hotels', 'HotelController');

//Route::get('/test', function () {
//    return view('backend.master');
//});
//Route::get('/add-room', function () {
//    return view('backend.pages.room.add-room');
//});/*this test route*/
//Route::get('/', function () {
//    return view('backend.master');
//})->name('home');
//
////For hotel start
////this is for test by jahid 28.3.2021
//Route::resource('/hotels','HotelController');
////this is for test by jahid 28.3.2021 end here
//// for hotel end
//
//// For categories 2.04.21
//Route::resource('/categories','facilityCategoryController');
////Route::post('/categories/{id}','facilityCategoryController@update')->name('facilities.update');
////Route::get('/fetch/categories','facilityCategoryController@fetchFacilities');
////Route::post('/search/categories','facilityCategoryController@facilitiesSearch');
//
//
//// For facilities
//Route::resource('/facilities','FacilityController')->except('update');
//Route::post('/facilities/{id}','FacilityController@update')->name('facilities.update');
//Route::get('/fetch/facilities','FacilityController@fetchFacilities');
//Route::post('/search/facilities','FacilityController@facilitiesSearch');
//
//// For User
//Route::resource('/users','UserController')->except('update');
//Route::post('/users/{id}','UserController@update')->name('users.update');
//Route::get('/fetch/user','UserController@fetchUser');
//
//// For Auth
//Route::get('/login','AuthController@getLogin')->name('getLogin');
//Route::post('/login','AuthController@postLogin');
//Route::get('/logout','AuthController@logout');
//Route::get('/otp','AuthController@otp');
//Route::post('/otp/verified','AuthController@otpVerified');
//Route::get('/auth/dashboard', 'AuthController@sampleDashboard');
//
////For Room Type
//Route::resource('/room-type','RoomTypeController')->except('update');
//Route::post('/room-type/{id}','RoomTypeController@update')->name('room-type.update');
//Route::get('/fetch/room-type','RoomTypeController@fetchRoomType');
//
//// For Room
//Route::resource('/rooms','RoomController')->except('update');
//Route::post('/rooms/{id}','RoomController@update')->name('rooms.update');
//Route::get('/fetch/rooms','RoomController@fetchRoom');
//Route::get('/fetch/room-type','RoomController@fetchRoomType');
//Route::get('/fetch/facilities-category','RoomController@fetchFacilitiesCategory');
//
//
////for Room booking
//Route::resource('/room-booking','RoomBookingController')->except('update');
//Route::post('/room-booking/{id}','RoomBookingController@update')->name('room-booking.update');
//Route::get('/fetch/room-booking','RoomBookingController@fetchRoomBooking');
//Route::get('/fetch/room','RoomBookingController@getRoom');
//
//// For Room picture
//Route::resource('/room-images','ImageController');
//
//
//
///*Test for HasMany rln*/
//Route::get('/rln',function(){
//    $FacilitiesHasRoom = facilities::with('room')->get();
//    return $FacilitiesHasRoom;
//});


// Route::get('/home', 'HomeController@index')->name('home');
