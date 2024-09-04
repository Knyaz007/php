<?php

use App\Http\Controllers\TourController;
//use App\Http\Controllers\FeedbackController;


 
Route::resource('tours', TourController::class);


//Route::get('/index', [TourController::class, 'index'])->name('tours.index');
//Route::get('/tours/details/{id}', [TourController::class, 'show'])->name('tours.show');
//::get('/tours/edit/{id}', [TourController::class, 'edit'])->middleware('admin')->name('tours.edit');
//Route::get('/tours/delete/{id}', [TourController::class, 'destroy'])->middleware('admin')->name('tours.delete');
//Route::get('/tours/new', [TourController::class, 'create'])->middleware('admin')->name('tours.create');

//Route::post('/send-email', [FeedbackController::class, 'send'])->name('feedback.send');




use App\Http\Controllers\HotelController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\TrainController;

// Маршрут для списка отелей
Route::get('/hotels/list', [HotelController::class, 'index'])->name('hotels.index');

// Маршрут для автобуcов
Route::get('/buses/list', [BusController::class, 'index'])->name('buses.index');

// Маршрут для списка авиабилетов
Route::get('/flights/list', [FlightController::class, 'index'])->name('flights.index');

// Маршрут для ЖД/Билетов (если будет отдельный контроллер)
Route::get('/trains/list', [TrainController::class, 'index'])->name('trains.index');


use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout');


use App\Http\Controllers\Booking\BookingController;
use App\Http\Controllers\Booking\BusBookingController;
 use App\Http\Controllers\Booking\FlightBookingController;
use App\Http\Controllers\Booking\HotelBookingController;
 use App\Http\Controllers\Booking\TourBookingController;
use App\Http\Controllers\Booking\TrainBookingController;
 

Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');

Route::get('/hotel-bookings', [HotelBookingController::class, 'index'])->name('hotel-bookings.index');
Route::get('/bus-bookings', [BusBookingController::class, 'index'])->name('bus-bookings.index');
 Route::get('/flight-bookings', [FlightBookingController::class, 'index'])->name('flight-bookings.index');
 Route::get('/tour-bookings', [TourBookingController::class, 'index'])->name('tour-bookings.index');
Route::get('/train-bookings', [TrainBookingController::class, 'index'])->name('train-bookings.index');

// routes/web.php

 
//use App\Http\Controllers\EmailController;

//Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');

use App\Http\Controllers\EmailController;

Route::post('/send-email', [EmailController::class, 'sendEmail']);


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
