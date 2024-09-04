<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    // Если таблица называется иначе, чем "hotels"
    // protected $table = 'hotels';

    // Если первичный ключ имеет другое имя
    // protected $primaryKey = 'hotel_id';

    // Если в таблице нет временных меток (created_at, updated_at)
    // public $timestamps = false;

    // Массив заполняемых полей
    protected $fillable = ['name', 'location', 'rating', 'description'];
}

