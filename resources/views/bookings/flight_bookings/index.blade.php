@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Реестр рейсов</h2>
        <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Авиакомпания</th>
                <th>Номер рейса</th>
                <th>Время вылета</th>
                <th>Время прилета</th>
                <th>Цена</th>
            </tr>
            </thead>
            <tbody>
            @foreach($flights as $flight)
                <tr>
                    <td>{{ $flight->airline }}</td>
                    <td>{{ $flight->flight_number }}</td>
                    <td>{{ $flight->departure_time }}</td>
                    <td>{{ $flight->arrival_time }}</td>
                    <td>{{ $flight->price }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
