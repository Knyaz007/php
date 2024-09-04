<?php
namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController  
{
    public function index()
    {
        $flights = Flight::all(); // Получаем все туры
        // Логика для отображения списка авиабилетов
        return view('flights.index' , compact('flights')); // Создайте представление flights/index.blade.php
    }
}
