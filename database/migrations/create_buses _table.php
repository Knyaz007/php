<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    

public function up(): void
{
    Schema::create('buses', function (Blueprint $table) {
        $table->id(); // Primary key
        $table->string('bus_number'); // Номер автобуса
        $table->string('departure_station'); // Станция отправления
        $table->string('arrival_station'); // Станция прибытия
        $table->timestamp('departure_time'); // Время отправления
        $table->timestamp('arrival_time'); // Время прибытия
        $table->decimal('price', 8, 2); // Цена билета
        $table->timestamps(); // Дата создания и обновления записи
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses'); // Drop the table when rolling back the migration
    }

 

};
