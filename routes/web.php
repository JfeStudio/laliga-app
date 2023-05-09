<?php

use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\TeamController;
use App\Models\Score;
use Illuminate\Support\Facades\Route;

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
    $monitorings = Score::latest()->get();
    return view('home', compact('monitorings'));
});
Route::resource('teams', TeamController::class);
Route::resource('scores', ScoreController::class);
Route::resource('monitorings', MonitoringController::class);
