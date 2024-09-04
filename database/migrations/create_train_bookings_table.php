<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Запуск миграции.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('train_id')->constrained()->onDelete('cascade');
            $table->date('departure_date');
            $table->timestamps();
        });
    }

    /**
     * Отмена миграции.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train_bookings');
    }
};
