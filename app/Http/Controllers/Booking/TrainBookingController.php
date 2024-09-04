<?php


namespace App\Http\Controllers\Booking;

use App\Models\Train;
use Illuminate\Http\Request;
use App\Models\Booking\TrainBooking;
 
class TrainBookingController  
{
    public function index()
    {
        $bookings = TrainBooking::all();
        // Логика для отображения списка ЖД/билетов
        return view('bookings.train_bookings.index', compact('bookings')); // Создайте представление trains/index.blade.php

       
    }
}



