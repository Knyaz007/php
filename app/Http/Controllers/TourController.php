<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all(); // Получаем все туры
        return view('tours.index', compact('tours'));
    }

    public function show($id)
    {
        $tour = Tour::findOrFail($id);
        return view('tours.show', compact('tour'));
    }

    public function edit($id)
    {
        $tour = Tour::findOrFail($id);
        return view('tours.edit', compact('tour'));
    }

    public function destroy($id)
    {
        $tour = Tour::findOrFail($id);
        $tour->delete();
        return redirect()->route('tours.index')->with('success', 'Тур удален');
    }

    public function create()
    {
        return view('tours.create');
    }
     public function store(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Создание нового тура
        Tour::create($validated);

        // Перенаправление на страницу со списком туров с сообщением об успехе
        return redirect()->route('tours.index')->with('success', 'Тур успешно создан');
    }

     public function update(Request $request, $id)
    {
        // Валидация входных данных
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Поиск тура по ID
        $tour = Tour::findOrFail($id);

        // Обновление данных тура
        $tour->update($validated);

        // Перенаправление на страницу списка туров с сообщением об успешном обновлении
        return redirect()->route('tours.index')->with('success', 'Тур успешно обновлен');
    }
}




namespace App\Http\Controllers;

abstract class Controller
{
    //
}
