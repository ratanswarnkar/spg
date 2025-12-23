<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SteelController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', [SteelController::class, 'about']);
Route::get('/services', [SteelController::class, 'products']);
Route::get('/projects', [SteelController::class, 'projects']);
Route::get('/contact', [SteelController::class, 'contact']);
Route::get('/fixed-tilt-solar-structures', [SteelController::class, 'fixed']);
Route::view('/solar-tracking-structures', 'solar-tracking-structures');
Route::view('/utility-scale-solar-structures', 'utility-scale-solar-structures');
Route::view('/industrial-rooftop-structures', 'industrial-rooftop-structures');
Route::view('/customized-steel-fabrication', 'customized-steel-fabrication');
Route::view('/galvanized-corrosion-resistant-structures','galvanized-corrosion-resistant-structures');

