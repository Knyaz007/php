<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     

       public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id(); // Автоинкрементный первичный ключ
            $table->string('airline'); // Название авиакомпании
            $table->string('flight_number'); // Номер рейса
            $table->dateTime('departure_time'); // Время вылета
            $table->dateTime('arrival_time'); // Время прибытия
            $table->decimal('price', 8, 2); // Цена билета
            $table->timestamps(); // Поля created_at и updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('flights'); // Удаление таблицы при откате миграции
    }

    

};
