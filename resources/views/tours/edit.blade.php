@extends('layouts.app')

@section('title', 'Редактировать тур')

@section('content')
    <div class="container">
        <h2>Редактировать тур</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tours.update', $tour->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Название тура</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $tour->name) }}" required>
            </div>
            <div class="form-group">
                <label for="start_date">Дата начала</label>
                <input type="date" name="start_date" class="form-control" id="start_date" value="{{ old('start_date', $tour->start_date) }}" required>
            </div>
            <div class="form-group">
                <label for="end_date">Дата окончания</label>
                <input type="date" name="end_date" class="form-control" id="end_date" value="{{ old('end_date', $tour->end_date) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>
    </div>
@endsection
