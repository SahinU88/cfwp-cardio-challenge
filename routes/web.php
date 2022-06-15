<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DisciplineController;
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
    Route::get('/my-entries', function(){
        return view('user.entries')->with([
            'teams' => Team::all(),
        ]);
    })->name('user.entries');
    Route::get('/add-entry', fn() => view('disciplines.create'))->name('disciplines.create');

    Route::post('/disciplines/{type}', [DisciplineController::class, 'store'])->name('disciplines.store');
});
