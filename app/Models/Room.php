<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    // Если таблица называется иначе, чем "rooms"
    // protected $table = 'rooms';

    // Если первичный ключ имеет другое имя
    // protected $primaryKey = 'room_id';

    // Если в таблице нет временных меток
    // public $timestamps = false;

    protected $fillable = ['hotel_id', 'room_type', 'price', 'capacity', 'availability'];
}
