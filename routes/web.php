<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function() {
    return view('index');
});

Route::match (['get', 'post'], '/year', function() {
    return view('year');
});

Route::match (['get', 'post'], '/month', function() {
    return view('month');
});

Route::get('/testview', [MainController::class, 'testView'])
;