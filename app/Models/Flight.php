<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
     ф

    protected $fillable = ['airline', 'flight_number', 'departure_time', 'arrival_time', 'price'];
}
