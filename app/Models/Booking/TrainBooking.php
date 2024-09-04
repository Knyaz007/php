<?php


namespace App\Models\Booking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainBooking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'train_id', 'departure_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function train()
    {
        return $this->belongsTo(\App\Models\Train::class);
    }
}


