<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

     // Поля, доступные для массового заполнения
    protected $fillable = [
        'name', 'email', 'password', 'is_admin',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

        // Преобразование полей к типам
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
    ];

    // Проверка, является ли пользователь администратором
    public function isAdmin()
    {
        return $this->is_admin;
    }
    
}
