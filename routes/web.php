<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommercialController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\DoController;
use App\Http\Controllers\TocallController;
use App\Http\Controllers\LostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/*--------WELCOME---------*/

Route::get('/', function () { return view('pages.welcome');});

/*--------FEATURES---------*/

Route::get('/features', function () { return view('pages.features');});

/*--------PRICING---------*/

Route::get('/pricing', function () { return view('pages.pricing');});

/*--------ABOUT---------*/

Route::get('/about', function () { return view('pages.about');});






/*Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');*/


/*--------COMMERCIAL ROUTES---------*/

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    /*Route::get('/dashboard/todo', function () { return view('todo'); })->middleware(['auth'])->name('dashboard');*/
    Route::get('/dashboard',  [CommercialController::class, 'index'])->name('commercial.dashboard');
    Route::get('/dashboard/todo',  [TodoController::class, 'index'])->name('commercial.todo');
    Route::get('/dashboard/do',  [DoController::class, 'index'])->name('commercial.do');
    Route::get('/dashboard/tocall',  [TocallController::class, 'index'])->name('commercial.tocall');
    Route::get('/dashboard/lost',  [LostController::class, 'index'])->name('commercial.lost');

});



/*------------ADMIN ROUTES------------*/



require __DIR__.'/auth.php';
