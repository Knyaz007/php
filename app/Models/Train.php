<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    // Если таблица называется иначе, чем "trains"
    // protected $table = 'trains';

    // Если первичный ключ имеет другое имя
    // protected $primaryKey = 'train_id';

    // Если в таблице нет временных меток
    // public $timestamps = false;

    protected $fillable = ['train_number', 'departure_station', 'arrival_station', 'departure_time', 'arrival_time', 'price'];
}
