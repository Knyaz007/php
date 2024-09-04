<?php


namespace App\Models\Booking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusBooking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'bus_id', 'departure_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bus()
    {
        return $this->belongsTo(\App\Models\Bus::class);
    }
}



