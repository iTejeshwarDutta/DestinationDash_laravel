<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\book_formController;


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
    return view('welcome');
});




Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[AuthController::class,'index'])->name('login');
    Route::post('login',[AuthController::class,'login'])->name('login')->middleware('throttle:2,1');

    Route::get('register',[AuthController::class,'register_view'])->name('register');
    Route::post('register',[AuthController::class,'register'])->name('register')->middleware('throttle:2,1');
});



Route::group(['middleware'=>'auth'],function(){
    Route::get('home',[AuthController::class,'home'])->name('home');
    Route::get('logout',[AuthController::class,'logout'])->name('logout');
});

Route::get('/golf', function(){
    return view ('golf');
});
Route::get('/about', function(){
    return view('about');
});
 
Route::get('/home', function(){
    return view('home');
});
 
Route::get('/package', function(){
    return view('package');
});
 
Route::get('/book', function(){
    return view('book');
});
Route::get('/book', [book_formController::class, 'Addbook_form']
);
Route::POST('/book', [book_formController::class, 'Addbook_form']
);
//  Route::get('/books', [BookingController::class,'index']);
//  Route::post('/books', [BookingController::class,'books']);