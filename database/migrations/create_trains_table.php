<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{   

     public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id(); // Автоинкрементный первичный ключ
            $table->string('train_number'); // Номер поезда
            $table->string('departure_station'); // Станция отправления
            $table->string('arrival_station'); // Станция прибытия
            $table->dateTime('departure_time'); // Время отправления
            $table->dateTime('arrival_time'); // Время прибытия
            $table->decimal('price', 8, 2); // Цена билета
            $table->timestamps(); // Поля created_at и updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('trains'); // Удаление таблицы при откате миграции
    }


};
