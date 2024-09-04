@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Реестр автобусов</h2>
        <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Номер автобуса</th>
                <th>Станция отправления</th>
                <th>Станция прибытия</th>
                <th>Время отправления</th>
                <th>Время прибытия</th>
                <th>Цена</th>
            </tr>
            </thead>
            <tbody>
            @foreach($buses as $bus)
                <tr>
                    <td>{{ $bus->bus_number }}</td>
                    <td>{{ $bus->departure_station }}</td>
                    <td>{{ $bus->arrival_station }}</td>
                    <td>{{ $bus->departure_time }}</td>
                    <td>{{ $bus->arrival_time }}</td>
                    <td>{{ $bus->price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
