@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Реестр туров</h2>
        <table class="table table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Название тура</th>
                <th>Дата начала</th>
                <th>Дата окончания</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tours as $tour)
                <tr>
                    <td>{{ $tour->name }}</td>
                    <td>{{ $tour->start_date }}</td>
                    <td>{{ $tour->end_date }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
