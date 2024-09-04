@extends('layouts.app')

@section('title', 'Реестр бронирования отелей')

@section('content')
    <div class="container">
        <h2>Реестр бронирования отелей</h2>
        <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Пользователь</th>
                <th>Отель</th>
                <th>Дата заезда</th>
                <th>Дата выезда</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->user->name }}</td>
                    <td>{{ $booking->hotel->name }}</td>
                    <td>{{ $booking->check_in_date }}</td>
                    <td>{{ $booking->check_out_date }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
