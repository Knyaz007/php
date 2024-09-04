<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ChangeIsAdminToBooleanInUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users_temp', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('is_admin')->default(false); // Измените этот столбец
            $table->rememberToken();
            $table->timestamps();
        });

        // Перенос данных из старой таблицы в новую
        DB::table('users')->select('id', 'name', 'email', 'email_verified_at', 'password', 'is_admin', 'remember_token', 'created_at', 'updated_at')->chunk(100, function ($users) {
            DB::table('users_temp')->insert($users->toArray());
        });

        // Удаление старой таблицы
        Schema::drop('users');

        // Переименование новой таблицы в старое имя
        Schema::rename('users_temp', 'users');
    }

    public function down()
    {
        Schema::create('users_temp', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('is_admin')->nullable(); // Восстановление старого столбца
            $table->rememberToken();
            $table->timestamps();
        });

        // Перенос данных обратно
        DB::table('users')->select('id', 'name', 'email', 'email_verified_at', 'password', 'is_admin', 'remember_token', 'created_at', 'updated_at')->chunk(100, function ($users) {
            DB::table('users_temp')->insert($users->toArray());
        });

        // Удаление новой таблицы
        Schema::drop('users');

        // Переименование временной таблицы обратно в users
        Schema::rename('users_temp', 'users');
    }
}


