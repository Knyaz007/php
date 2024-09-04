<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

  
    protected $fillable = ['bus_number', 'departure_station', 'arrival_station', 'departure_time', 'arrival_time', 'price'];
}
