@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Реестры бронирований</h2>
  <div class="list-group mb-4">
    <a href="{{ route('hotel-bookings.index') }}" class="list-group-item list-group-item-action">
      Реестр бронирования отелей
    </a>
    <a href="{{ route('bus-bookings.index') }}" class="list-group-item list-group-item-action">
      Реестр бронирования автобусов
    </a>
    <a href="{{ route('flight-bookings.index') }}" class="list-group-item list-group-item-action">
      Реестр бронирования авиабилетов
    </a>
    <a href="{{ route('tour-bookings.index') }}" class="list-group-item list-group-item-action">
      Реестр бронирования туров
    </a>
    <a href="{{ route('train-bookings.index') }}" class="list-group-item list-group-item-action">
      Реестр бронирования ЖД билетов
    </a>
  </div>
 </div>
@endsection
