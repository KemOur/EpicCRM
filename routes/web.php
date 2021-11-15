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

        /*----------------------------------------[ WELCOME ]-----------------------------------------*/

        /*--------HOME---------*/
        Route::get('/',  [HomepageController::class, 'index'])->name('pages.welcome');
        /*--------FEATURES---------*/
        Route::get('/features', function () { return view('pages.features');});
        /*--------PRICING---------*/
        Route::get('/pricing', function () { return view('pages.pricing');});
        /*--------ABOUT---------*/
        Route::get('/about', function () { return view('pages.about');});





/*--------------------------------------------------------[ ADMIN ]----------------------------------------------------------------*/

        /*------------------[ ADMIN - HOMEPAGE - DASHBOARD]-----------------*/
        Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('auth')->name('admin.dashboard');

        /*------------[ ADMIN - ADMINISTRATION ]------------*/
        Route::get('admin/administration/addadmin', [\App\Http\Controllers\Admin\AdminController::class, 'create'])->middleware('auth')->name('admin.administration.addadmin');
        Route::get('admin/administration/admin', [\App\Http\Controllers\Admin\AdminController::class, 'show'])->middleware('auth')->name('admin.administration.admin');
        Route::get('admin/administration/admins', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->middleware('auth')->name('admin.administration.admins');
        Route::get('admin/administration/editadmin', [\App\Http\Controllers\Admin\AdminController::class, 'edit'])->middleware('auth')->name('admin.administration.editadmin');

        /*------------[ ADMIN - COMMERCIALS ]------------*/
        Route::get('admin/commercials/addcommercial', [\App\Http\Controllers\Admin\CommercialController::class, 'create'])->middleware('auth')->name('admin.commercials.addcommercial');
        Route::get('admin/commercials/commercial', [\App\Http\Controllers\Admin\CommercialController::class, 'show'])->middleware('auth')->name('admin.commercials.commercial');
        Route::get('admin/commercials/commercials', [\App\Http\Controllers\Admin\CommercialController::class, 'index'])->middleware('auth')->name('admin.commercials.commercials');
        Route::get('admin/commercials/editcommercial', [\App\Http\Controllers\Admin\CommercialController::class, 'edit'])->middleware('auth')->name('admin.commercials.editcommercial');

        /*------------[ ADMIN - LEADS ]------------*/
        Route::get('admin/leads/addlead', [\App\Http\Controllers\Admin\LeadController::class, 'create'])->middleware('auth')->name('admin.leads.addlead');
        Route::get('admin/leads/editlead', [\App\Http\Controllers\Admin\LeadController::class, 'edit'])->middleware('auth')->name('admin.leads.editlead');
        Route::get('admin/leads/lead', [\App\Http\Controllers\Admin\LeadController::class, 'show'])->middleware('auth')->name('admin.leads.lead');
        Route::get('admin/leads/leads', [\App\Http\Controllers\Admin\LeadController::class, 'index'])->middleware('auth')->name('admin.leads.leads');

        /*------------[ ADMIN - LEADS - TYPE ]------------*/
        Route::get('admin/leads/leadstypes/addleadtype', [\App\Http\Controllers\Admin\LeadTypeController::class, 'create'])->middleware('auth')->name('admin.leads.leadstypes.addleadtype');
        Route::get('admin/leads/leadstypes/editleadtype', [\App\Http\Controllers\Admin\LeadTypeController::class, 'edit'])->middleware('auth')->name('admin.leads.leadstypes.editleadtype');
        Route::get('admin/leads/leadstypes/leadtype', [\App\Http\Controllers\Admin\LeadTypeController::class, 'show'])->middleware('auth')->name('admin.leads.leadstypes.leadtype');
        Route::get('admin/leads/leadstypes/leadtypes', [\App\Http\Controllers\Admin\LeadTypeController::class, 'index'])->middleware('auth')->name('admin.leads.leadstypes.leadtypes');

        /*------------[ ADMIN - MANAGERS ]------------*/
        Route::get('admin/managers/addmanager', [\App\Http\Controllers\Admin\ManagerController::class, 'create'])->middleware('auth')->name('admin.managers.addmanager');
        Route::get('admin/managers/editmanager', [\App\Http\Controllers\Admin\ManagerController::class, 'edit'])->middleware('auth')->name('admin.managers.editmanager');
        Route::get('admin/managers/manager', [\App\Http\Controllers\Admin\ManagerController::class, 'show'])->middleware('auth')->name('admin.managers.manager');
        Route::get('admin/managers/managers', [\App\Http\Controllers\Admin\ManagerController::class, 'index'])->middleware('auth')->name('admin.managers.managers');

        /*------------[ ADMIN - PLANS ]------------*/
        Route::get('admin/plans/addplan', [\App\Http\Controllers\Admin\PlanController::class, 'create'])->middleware('auth')->name('admin.plans.addplan');
        Route::get('admin/plans/editplan', [\App\Http\Controllers\Admin\PlanController::class, 'edit'])->middleware('auth')->name('admin.plans.editplan');
        Route::get('admin/plans/plan', [\App\Http\Controllers\Admin\PlanController::class, 'show'])->middleware('auth')->name('admin.plans.plan');
        Route::get('admin/plans/plans', [\App\Http\Controllers\Admin\PlanController::class, 'index'])->middleware('auth')->name('admin.plans.plans');

        /*------------[ ADMIN - PLANS - TYPE ]------------*/
        Route::get('admin/plans/planstype/addplantype', [\App\Http\Controllers\Admin\PlanTypeController::class, 'create'])->middleware('auth')->name('admin.plans.planstype.addplantype');
        Route::get('admin/plans/planstype/editplantype', [\App\Http\Controllers\Admin\PlanTypeController::class, 'edit'])->middleware('auth')->name('admin.plans.planstype.editplantype');
        Route::get('admin/plans/planstype/plantype', [\App\Http\Controllers\Admin\PlanTypeController::class, 'show'])->middleware('auth')->name('admin.plans.planstype.plantype');
        Route::get('admin/plans/planstype/plantypes', [\App\Http\Controllers\Admin\PlanTypeController::class, 'index'])->middleware('auth')->name('admin.plans.planstype.plantypes');













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




        /*-------- [ COMMERCIAL ROUTES ]---------*/

        Route::group(['middleware' => 'auth'], function() {

            //Route::get('/dashboard',  [UsersController::class, 'index'])->name('pages.dashboard');

            Route::get('/commercial/dashboard',  [CommercialController::class, 'index'])->name('commercial.dashboard');
            Route::get('/dashboard/todo',  [TodoController::class, 'index'])->name('commercial.todo');
            Route::get('/dashboard/do',  [DoController::class, 'index'])->name('commercial.do');
            Route::get('/dashboard/tocall',  [TocallController::class, 'index'])->name('commercial.tocall');
            Route::get('/dashboard/lost',  [LostController::class, 'index'])->name('commercial.lost');

        });




require __DIR__.'/auth.php';
