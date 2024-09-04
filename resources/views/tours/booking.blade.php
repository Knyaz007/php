@extends('layouts.app')

@section('title', 'Создать новое бронирование тура')

@section('content')
    <div class="container">
        <h2>Создать новое бронирование тура</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tour_bookings.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="user_id">Пользователь</label>
                <select name="user_id" id="user_id" class="form-control" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tour_id">Тур</label>
                <select name="tour_id" id="tour_id" class="form-control" required>
                    @foreach($tours as $tour)
                        <option value="{{ $tour->id }}">{{ $tour->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="booking_date">Дата бронирования</label>
                <input type="date" name="booking_date" class="form-control" id="booking_date" value="{{ old('booking_date') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection
