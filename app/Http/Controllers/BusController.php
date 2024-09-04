<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;

class BusController  
{
    public function index()
    {
        $buses = Bus::all();
        return view('buses.index', compact('buses'));
    }
    
}
