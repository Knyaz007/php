<?php

namespace App\Http\Controllers\Booking;

use App\Models\Booking\HotelBooking;
use Illuminate\Http\Request;

class HotelBookingController  
{
    public function index()
    {
        $bookings = HotelBooking::all();
       // return view('bookings\hotel_bookings.index', compact('bookings')); bookings
        return view('layouts.bookings', compact('bookings')); 
    }
}



