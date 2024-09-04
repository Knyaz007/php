@extends('layouts.app')

@section('title', 'Создать новый тур')

@section('content')
    <div class="container">
        <h2>Создать новый тур</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tours.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Название тура</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Введите название тура" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="start_date">Дата начала</label>
                <input type="date" name="start_date" class="form-control" id="start_date" value="{{ old('start_date') }}" required>
            </div>
            <div class="form-group">
                <label for="end_date">Дата окончания</label>
                <input type="date" name="end_date" class="form-control" id="end_date" value="{{ old('end_date') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection
