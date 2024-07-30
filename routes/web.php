<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalController;


Route::get('/', function () {
    return view('addnumber');
});


Route::post('/add', [CalController::class, 'add'])->name('cal.add');