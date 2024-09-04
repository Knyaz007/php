<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    

     public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id(); // Автоинкрементный первичный ключ
            $table->foreignId('hotel_id')->constrained()->onDelete('cascade'); // Внешний ключ на таблицу hotels
            $table->string('room_type'); // Тип комнаты (например, "двухместный", "люкс")
            $table->decimal('price', 8, 2); // Цена за комнату
            $table->integer('capacity'); // Вместимость комнаты
            $table->boolean('availability')->default(true); // Доступность комнаты
            $table->timestamps(); // Поля created_at и updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms'); // Удаление таблицы при откате миграции
    }

 

};
