<?php

namespace App\Http\Controllers\Booking;

use Illuminate\Http\Request;

 
class BookingController  
{
    public function index()
    {
       
        return view('bookings.index'); 
    }
}



