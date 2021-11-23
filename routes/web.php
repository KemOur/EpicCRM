<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\DoController;
use App\Http\Controllers\TocallController;
use App\Http\Controllers\LostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

        /*----------------------------------------[ VISITOR ]-----------------------------------------*/

        Route::get('/',  [HomepageController::class, 'index'])->name('pages.welcome');
        Route::get('/features', function () { return view('pages.features');});
        Route::get('/pricing', function () { return view('pages.pricing');});
        Route::get('/about', function () { return view('pages.about');});
        Route::get('/guide', function () { return view('pages.guide');});
        Route::get('/suivie', function () { return view('pages.suivie');});
        Route::get('/alternativeexcel', function () { return view('pages.alternativeexcel');});
        Route::get('/aide', function () { return view('pages.aide');});
        Route::get('/prospection', function () { return view('pages.prospection');});





/*--------------------------------------------------------[ ADMIN ]----------------------------------------------------------------*/

        /*------------------[ ADMIN - HOMEPAGE - DASHBOARD]-----------------*/


        //Route::get('admin/d', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->middleware(['auth:admin'])->name('admin.dashboard');
        Route::post('/admin/check',[\App\Http\Controllers\Admin\AdminController::class, 'check'])->middleware('guest:admin')->name('admin');
        Route::get('/admin/login',[\App\Http\Controllers\Admin\AdminController::class,'login'])->name('admin.login');

        //Route::prefix('admin/login', [\App\Http\Controllers\Admin\DashboardController::class, 'login']);
        //Route::post('admin/check', [\App\Http\Controllers\Admin\AdminController::class, 'check'])->middleware('admin')->name('admin.check');
        //Route::get('admin/d', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('auth ')->name('admin.dashboard');


        Route::get('admin/d', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('auth')->name('admin.dashboard');
        //Route::get('admin/login', [\App\Http\Controllers\Admin\DashboardController::class, 'login']);
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
        Route::get('admin/profile/addmanager', [\App\Http\Controllers\Admin\ManagerController::class, 'create'])->middleware('auth')->name('admin.profile.addmanager');
        Route::get('admin/profile/editmanager', [\App\Http\Controllers\Admin\ManagerController::class, 'edit'])->middleware('auth')->name('admin.profile.editmanager');
        Route::get('admin/profile/manager', [\App\Http\Controllers\Admin\ManagerController::class, 'show'])->middleware('auth')->name('admin.profile.manager');
        Route::get('admin/profile/profile', [\App\Http\Controllers\Admin\ManagerController::class, 'index'])->middleware('auth')->name('admin.profile.profile');

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







/*--------------------------------------------------------[ MANAGER ]----------------------------------------------------------------*/

        //-----------------[ DASHBOARD ]--------------//
        Route::get('manager/dashboard', [\App\Http\Controllers\Manager\DashboardController::class, 'index'])->middleware('auth')->name('manager.dashboard');
        //Route::get('/manager/dashboard', [\App\Http\Controllers\Manager\DashboardController::class, 'index'])->middleware('auth')->name('manager.dashboard');
        //Route::get('/manager/dashboard', [\App\Http\Controllers\UsersController::class, 'index'])->middleware('auth')->name('manager.dashboard');

        //------------------[ PROFILE ]----------------//
        Route::get('/manager/profile/manager', [\App\Http\Controllers\Manager\ManagerController::class, 'profile'])->middleware('auth')->name('manager.profile.manager');
        Route::get('/manager/profile/editmanager/{id}', [\App\Http\Controllers\Manager\ManagerController::class, 'edit'])->middleware('auth')->name('manager.profile.editmanager');
        Route::get('/manager/profile/editmanager/store/{id}', [\App\Http\Controllers\Manager\ManagerController::class, 'update'])->middleware('auth')->name('manager.profile.editmanager');

        //----------------[ COMMERCIAL ]--------------//
        Route::get('/manager/commercials/commercials', [\App\Http\Controllers\Manager\CommercialController::class, 'index'])->middleware('auth')->name('manager.commercials.commercials');
        Route::get('/manager/commercials/addcommercial', [\App\Http\Controllers\Manager\CommercialController::class, 'create' ]) ->middleware('auth')->name('manager.commercials.addcommercial');
        Route::post('/manager/commercials/addcommercial/store', [\App\Http\Controllers\Manager\CommercialController::class, 'store' ]) ->middleware('auth')->name('manager.commercials.addcommercial.store');
        Route::delete('/manager/commercials/destroy/{id}', [\App\Http\Controllers\Manager\CommercialController::class, 'destroy'])->middleware('auth') ->name('manager.commercials.destroy');
        Route::get('/manager/commercials/editcommercial/{id}', [\App\Http\Controllers\Manager\CommercialController::class, 'edit' ]) ->middleware('auth')->name('manager.commercials.editcommercial');
        Route::put('/manager/commercials/editcommercial/store/{id}', [\App\Http\Controllers\Manager\CommercialController::class, 'update' ])->middleware('auth')->name('manager.commercials.editcommercial');

        //-------------------[ LEAD ]-----------------//
        Route::get('/manager/leads/leads', [\App\Http\Controllers\LeadsController::class, 'index'])->middleware('auth')->name('manager.leads.leads');
        Route::get('/manager/leads/addlead', [\App\Http\Controllers\LeadsController::class, 'addlead'])->middleware('auth')->name('manager.leads.addlead');
        Route::post('/manager/leads/store', [\App\Http\Controllers\LeadsController::class, 'store' ]) ->middleware('auth')->name('manager.leads.store');
        Route::get('manager/leads/lead/{id}', [\App\Http\Controllers\LeadsController::class, 'show' ]) ->middleware('auth')->name('manager.leads.lead');
        Route::delete('manager/leads/{id}', [\App\Http\Controllers\LeadsController::class, 'destroy'])->middleware('auth') ->name('manager.leads.destroy');
        Route::get('manager/leads/editlead/{id}', [\App\Http\Controllers\LeadsController::class, 'edit' ]) ->middleware('auth')->name('manager.leads.editlead');
        Route::put('manager/leads/editlead/store/{id}', [\App\Http\Controllers\LeadsController::class, 'update' ])->middleware('auth')->name('manager.leads.editlead.update');

        //--IMPORT EXCEL FILE--//
        Route::post('manager/leads/leads', [\App\Http\Controllers\LeadsController::class, 'import' ])->middleware('auth')->name('manager.leads.leads.import');
        //--EXPORT EXCEL/CSV FILE--//
        Route::get('manager/leads/leads/export-excel', [\App\Http\Controllers\LeadsController::class, 'exportIntoExcel' ])->middleware('auth')->name('manager.leads.leads.exportIntoExcel');
        Route::get('manager/leads/leads/export-csv', [\App\Http\Controllers\LeadsController::class, 'exportIntoCSV' ])->middleware('auth')->name('manager.leads.leads.exportIntoCSV');

        //-------------------[ PLANS ]-----------------//






/*--------------------------------------------------------[ COMMERCIAL ]----------------------------------------------------------------*/

        Route::group(['middleware' => 'auth'], function() {

            //Route::get('/dashboard',  [UsersController::class, 'index'])->name('pages.dashboard');

            Route::get('/commercial/dashboard',  [\App\Http\Controllers\Commercial\CommercialController::class, 'index'])->name('commercial.dashboard');
            Route::get('/dashboard/todo',  [TodoController::class, 'index'])->name('commercial.todo');
            Route::get('/dashboard/do',  [DoController::class, 'index'])->name('commercial.do');
            Route::get('/dashboard/tocall',  [TocallController::class, 'index'])->name('commercial.tocall');
            Route::get('/dashboard/lost',  [LostController::class, 'index'])->name('commercial.lost');

        });


require __DIR__.'/auth.php';
