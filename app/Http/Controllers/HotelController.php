<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController
{
    public function index()
    {
        $hotels = Hotel::all(); // Получаем все туры
        // Логика для отображения списка отелей
         return view('hotels.index' , compact('hotels'));// Создайте представление hotels/index.blade.php
    }
}
