@extends('layouts.app')

@section('title', 'Реестр бронирования отелей')

@section('content')
@if(auth()->check() && auth()->user()->isAdmin())
 <!-- Ссылка для создания нового тура -->
    <a href="{{ route('tours.create') }}" class="btn btn-success btn-sm">Добавить новый тур</a>
    @endif

<div class="container">
  <h2>Список Туров</h2>
   <div class="table-responsive">
<table class="table table-bordered">
    <thead class="thead-light">
        <tr>
            <!-- <th>ID</th> -->
            <th>Название</th>
            <th>Начало</th>
            <th>Окончание</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tours as $tour)
            <tr>
                <!-- <td>{{ $tour->tourId }}</td> -->
                <td>{{ $tour->name }}</td>
                <td>{{ \Carbon\Carbon::parse($tour->startDate)->format('d.m.Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($tour->endDate)->format('d.m.Y') }}</td>
                <td>
                    <a href="{{ url('/tours/details/' . $tour->tourId) }}" class="btn btn-info btn-sm">Подробнее</a>
@if(auth()->check() && auth()->user()->isAdmin())
    <!-- Ссылка для редактирования тура -->
    <a href="{{ route('tours.edit', $tour->id) }}" class="btn btn-warning btn-sm">Редактировать</a>

  

    <!-- Форма для удаления тура -->
    <form action="{{ route('tours.destroy', $tour->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
    </form>
@endif

 


                </td>
            </tr>
        @endforeach
    </tbody>
</table>

  </div>
  <!--  <a th:href="@{'/tours/new'}" th:if="${roles.contains('ROLE_ADMIN')}" class="btn btn-success mt-3">Добавить новый тур</a> -->
</div>

@endsection
