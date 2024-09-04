<?php

namespace App\Http\Controllers\Booking;
use App\Models\Bus;
use Illuminate\Http\Request;

 
class BusBookingController  
{
    public function index()
    {
        $buses = Bus::all();
        // Логика для отображения списка ЖД/билетов
        return view('trains.index', compact('buses')); // Создайте представление trains/index.blade.php
    }
}



