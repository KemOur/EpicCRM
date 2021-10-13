<?php

use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\UsersController;
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
    //Route::get('/admin',  [AdminUsersController::class, 'index'])->name('admin.dashboard');

    //Route::get('/dashboard',  [UsersController::class, 'index'])->name('pages.dashboard');

    Route::get('/dashboard',  [CommercialController::class, 'index'])->name('commercial.dashboard');
    Route::get('/dashboard/todo',  [TodoController::class, 'index'])->name('commercial.todo');
    Route::get('/dashboard/do',  [DoController::class, 'index'])->name('commercial.do');
    Route::get('/dashboard/tocall',  [TocallController::class, 'index'])->name('commercial.tocall');
    Route::get('/dashboard/lost',  [LostController::class, 'index'])->name('commercial.lost');

});


                            /*--------------------------------------------------------[ ADMIN ]----------------------------------------------------------------*/

/*------------[ ADMIN ROUTES -- USEARS ]------------*/

        //--DASHBOARD ADMIN--//
        Route::get('/dashboard/admin', [UsersController::class, 'index'])->middleware('auth')->name('admin.dashboard');


        //----USERS LIST-----//
        Route::get('/dashboard/admin/users', [UsersController::class, 'users'])->middleware('auth')->name('admin.users');
        //----ADD FORM USER----//
        Route::get('/dashboard/admin/adduser', [UsersController::class, 'adduser' ]) ->middleware('auth')->name('admin.adduser');
        //----STORE---//
        Route::post('/dashboard/admin/store', [UsersController::class, 'store' ]) ->middleware('auth')->name('admin.store');
        //----DELETE----//
        Route::delete('dashboard/admin/destroy/{id}', [UsersController::class, 'dest-roy'])->middleware('auth') ->name('admin.destroy');
        //---EDITION-FORM AND EDIT---//
        Route::get('dashboard/admin/edituser/{id}', [UsersController::class, 'edit' ]) ->middleware('auth')->name('admin.edit');
        Route::put('dashboard/admin/edituser/store/{id}', [UsersController::class, 'update' ])->middleware('auth')->name('admin.update');


/*------------[ ADMIN ROUTES -- LEADS ]------------*/

        //---LEADS LIST---//
        Route::get('/dashboard/admin/leads', [LeadsController::class, 'index'])->middleware('auth')->name('admin.leads');
        //--ADD FORM LEAD--//
        Route::get('/dashboard/admin/addlead', [LeadsController::class, 'addlead'])->middleware('auth')->name('admin.adduser');
        //---SSTORE---//
        Route::post('/dashboard/admin/store', [LeadsController::class, 'store' ]) ->middleware('auth')->name('admin.store');
        //--SHOW--//
        Route::get('dashboard/admin/show/{id}', [LeadsController::class, 'show' ]) ->middleware('auth')->name('admin.show');
        //-EDITION-FORM and edit-//
        Route::get('dashboard/admin/editlead/{id}', [LeadsController::class, 'edit' ]) ->middleware('auth')->name('admin.edit');
        Route::put('dashboard/admin/editlead/store/{id}', [LeadsController::class, 'update' ])->middleware('auth')->name('admin.update');


require __DIR__.'/auth.php';
