<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

 
class TrainController  
{
    public function index()
    {
        $trains = Train::all();
        // Логика для отображения списка ЖД/билетов
        return view('trains.index', compact('trains')); // Создайте представление trains/index.blade.php
    }
}



