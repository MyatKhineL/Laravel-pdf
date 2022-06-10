<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/invoice',function (){
    $pdf = PDF::loadView('invoice');
    return $pdf->download('invoice.pdf');
});

Route::get('/invoice-pdf',function (){
//    return view('invoice-pdf');
    $pdf = PDF::loadView('invoice-pdf');
    return $pdf->download('invoice.pdf');
});

