<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\FormularioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('informacion.inicio');
});

Route::get('/testimonio', function () {
    return view('informacion.testimonio');
});

Route::get('/inicio', function () {
    return view('informacion.inicio');
});
Route::get('/contactos', function () {
    return view('informacion.contactos');
});
Route::post('/send/email', [MailController::class, 'sendEmail'])->name('regcontacto');

Route::post('/send/email/cita', [FormularioController::class, 'sendForm'])->name('regcitas');