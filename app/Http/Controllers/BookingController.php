<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
class BookingController extends Controller
{
   public function index()
   {
    return view('book');
   }
   public function books(Request $request)
   {
    echo "<pre>";
    print_r($request->all());
   }
}
