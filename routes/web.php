<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LeadsController;
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

//Route::get('/', function () { return view('pages.welcome');});
Route::get('/',  [HomepageController::class, 'index'])->name('pages.welcome');


/*--------FEATURES---------*/

Route::get('/features', function () { return view('pages.features');});

/*--------PRICING---------*/

Route::get('/pricing', function () { return view('pages.pricing');});

/*--------ABOUT---------*/

Route::get('/about', function () { return view('pages.about');});






/*Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');*/


/*-------- [ COMMERCIAL ROUTES ]---------*/

Route::group(['middleware' => 'auth'], function() {

    //Route::get('/dashboard',  [UsersController::class, 'index'])->name('pages.dashboard');

        Route::get('/commercial/dashboard',  [CommercialController::class, 'index'])->name('commercial.dashboard');
        Route::get('/dashboard/todo',  [TodoController::class, 'index'])->name('commercial.todo');
        Route::get('/dashboard/do',  [DoController::class, 'index'])->name('commercial.do');
        Route::get('/dashboard/tocall',  [TocallController::class, 'index'])->name('commercial.tocall');
        Route::get('/dashboard/lost',  [LostController::class, 'index'])->name('commercial.lost');

});


/*--------------------------------------------------------[ ADMIN ]----------------------------------------------------------------*/
        Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('auth')->name('admin.dashboard');

/*------------[ MANAGER ROUTES ]------------*/

        //--DASHBOARD MANAGER--//
        Route::get('manager/dashboard', [\App\Http\Controllers\Manager\DashboardController::class, 'index'])->middleware('auth')->name('manager.dashboard');
        //Route::get('/manager/dashboard', [\App\Http\Controllers\Manager\DashboardController::class, 'index'])->middleware('auth')->name('manager.dashboard');
        //Route::get('/manager/dashboard', [\App\Http\Controllers\UsersController::class, 'index'])->middleware('auth')->name('manager.dashboard');




//--DASHBOARD PROFILE--//
        Route::get('/manager/dashboard/profile', [\App\Http\Controllers\UsersController::class, 'profile'])->middleware('auth')->name('manager.profile');
        //----USERS LIST-----//
        Route::get('/manager/dashboard/users', [\App\Http\Controllers\UsersController::class, 'users'])->middleware('auth')->name('manager.users');
        //----ADD FORM USER----//
        Route::get('/manager/dashboard/adduser', [\App\Http\Controllers\UsersController::class, 'adduser' ]) ->middleware('auth')->name('manager.adduser');
        //----STORE---//
        Route::post('/manager/dashboard/user/store', [\App\Http\Controllers\UsersController::class, 'store' ]) ->middleware('auth')->name('manager.store.user');
        //----DELETE----//
        Route::delete('/manager/dashboard/user/destroy/{id}', [\App\Http\Controllers\UsersController::class, 'destroy'])->middleware('auth') ->name('manager.destroy.user');
        //---EDITION-FORM AND EDIT---//
        Route::get('/manager/dashboard/edituser/{id}', [\App\Http\Controllers\UsersController::class, 'edit' ]) ->middleware('auth')->name('manager.edit.user');
        Route::put('/manager/dashboard/edituser/store/{id}', [\App\Http\Controllers\UsersController::class, 'update' ])->middleware('auth')->name('manager.update.user');


/*------------[ ADMIN ROUTES -- LEADS ]------------*/

        //---LEADS LIST---//
        Route::get('/manager/dashboard/leads', [\App\Http\Controllers\LeadsController::class, 'index'])->middleware('auth')->name('manager.leads');
        //--ADD FORM LEAD--//
        Route::get('/manager/dashboard/addlead', [\App\Http\Controllers\LeadsController::class, 'addlead'])->middleware('auth')->name('manager.addlead');
        //---SSTORE---//
        Route::post('/manager/dashboard/store', [\App\Http\Controllers\LeadsController::class, 'store' ]) ->middleware('auth')->name('manager.store');
        //--SHOW--//
        Route::get('manager/dashboard/show/{id}', [\App\Http\Controllers\LeadsController::class, 'show' ]) ->middleware('auth')->name('manager.show');
        //---DELETE---//
        Route::delete('manager/dashboard/destroy/{id}', [\App\Http\Controllers\LeadsController::class, 'destroy'])->middleware('auth') ->name('manager.destroy');
        //--EDITION-FORM and edit--//
        Route::get('manager/dashboard/editlead/{id}', [\App\Http\Controllers\LeadsController::class, 'edit' ]) ->middleware('auth')->name('manager.edit');
        Route::put('mannager/dashboard/editlead/store/{id}', [\App\Http\Controllers\LeadsController::class, 'update' ])->middleware('auth')->name('manager.update');

        //--IMPORT EXCEL FILE--//
        Route::post('manager/dashboard/leads', [\App\Http\Controllers\LeadsController::class, 'import' ])->middleware('auth')->name('manager.import');
        //--EXPORT EXCEL/CSV FILE--//
        Route::get('manager/dashboard/leads/export-excel', [\App\Http\Controllers\LeadsController::class, 'exportIntoExcel' ])->middleware('auth')->name('manager.exportIntoExcel');
        Route::get('manager/dashboard/leads/export-csv', [\App\Http\Controllers\LeadsController::class, 'exportIntoCSV' ])->middleware('auth')->name('manager.exportIntoCSV');



require __DIR__.'/auth.php';
