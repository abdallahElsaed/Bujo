<?php

use App\Http\Controllers\BrainController;
use App\Http\Controllers\DailyController;
use App\Http\Controllers\MonthController;
use App\Http\Controllers\MonthsController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WeeklyController;
use App\Http\Controllers\WorkHomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/months',[MonthController::class ,'index'])->name('months.index');
Route::post('/months',[MonthController::class ,'store'])->name('months.store');
Route::get('/allMonths',[MonthController::class ,'show'])->name('months.show');

// Route::resource('/months', MonthsController::class);
Route::resource('/daily', DailyController::class);
Route::resource('/student', StudentController::class);
Route::resource('/team', TeamController::class);
Route::resource('/weekly', WeeklyController::class);
Route::resource('/work_from_home', WorkHomeController::class);
Route::resource('/brain', BrainController::class);
Route::resource('/priority', PriorityController::class);
