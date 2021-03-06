<?php

use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DisciplineController;
use App\Models\Challenge;
use App\Models\Team;
use Illuminate\Support\Facades\Route;

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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
    Route::get('/add-entry', fn() => view('disciplines.create'))->name('disciplines.create');
    Route::get('/my-entries', fn() => view('user.entries'))->name('user.entries');
    Route::get('/my-team', fn() => view('user.team'))->name('user.team');

    Route::post('/disciplines/{type}', [DisciplineController::class, 'store'])->name('disciplines.store');
    Route::post('/challenges/{challenge}', [ChallengeController::class, 'store'])->name('challenges.store');
});
