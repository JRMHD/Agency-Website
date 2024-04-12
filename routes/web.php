<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\LogbookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('logbooktransfer', function () {
    return view('logbooktransfer');
});
Route::get('UberServices', function () {
    return view('UberServices');
});
Route::get('RealEstate', function () {
    return view('RealEstate');
});
Route::get('CommercialVehicleHire', function () {
    return view('CommercialVehicleHire');
});
Route::get('SecondHandVehicleDeals', function () {
    return view('SecondHandVehicleDeals');
});


Route::post('/submit-form', [FormController::class, 'store'])->name('submit-form');
Route::post('/subscribe', [SubscriptionController::class, 'store'])->name('subscribe.store');



Route::get('/logbook/upload', [LogbookController::class, 'showUploadForm'])->name('logbook.upload');
Route::post('/logbook/upload', [LogbookController::class, 'upload'])->name('logbook.upload.post');
Route::get('/logbook/download/{fileName}', [LogbookController::class, 'download'])->name('logbook.download');


Route::get('/logbook/download/{fileName}', [LogbookController::class, 'download'])
    ->name('logbook.download');