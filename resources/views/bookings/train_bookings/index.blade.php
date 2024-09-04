@extends('layouts.app')

@section('title', 'Реестр бронирования поездов')

@section('content')
    <div class="container">
        <h2>Реестр бронирования поездов</h2>
        <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Пользователь</th>
                <th>Номер поезда</th>
                <th>Станция отправления</th>
                <th>Станция прибытия</th>
                <th>Дата отправления</th>
                <th>Время отправления</th>
                <th>Время прибытия</th>
                <th>Цена</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->user->name }}</td>
                    <td>{{ $booking->train->train_number }}</td>
                    <td>{{ $booking->train->departure_station }}</td>
                    <td>{{ $booking->train->arrival_station }}</td>
                    <td>{{ $booking->departure_date }}</td>
                    <td>{{ $booking->train->departure_time }}</td>
                    <td>{{ $booking->train->arrival_time }}</td>
                    <td>{{ $booking->train->price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
