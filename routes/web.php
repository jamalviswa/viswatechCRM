<?php

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

use App\Http\Controllers\AdminusersController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\SalaryinfosController;

use App\Http\Controllers\StaffsController;

use App\Http\Controllers\ProjectestimationsController;

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminusersController::class, 'login'])->name('adminusers.login');
    Route::any('/forgot', [AdminusersController::class, 'forgot'])->name('adminusers.forgot');


    Route::get('/index', [DashboardController::class, 'index'])->name('dashboard.index');


    //Client List
    Route::get('/clients', [ClientsController::class, 'admin_index'])->name('clients.admin_index');
    Route::get('/clients/add', [ClientsController::class, 'admin_add'])->name('clients.admin_add');
    Route::post('/clients/store', [ClientsController::class, 'admin_store'])->name('clients.admin_store');
    Route::get('/clients/edit/{id}', [ClientsController::class, 'admin_edit'])->name('clients.admin_edit');
    Route::post('/clients/update/{id}', [ClientsController::class, 'admin_update'])->name('clients.admin_update');
    Route::get('/clients/view/{id}', [ClientsController::class, 'admin_view'])->name('clients.admin_view');
    Route::get('/clients/delete/{id}', [ClientsController::class, 'admin_delete'])->name('clients.admin_delete');

    Route::get('/staffs', [StaffsController::class, 'index'])->name('staffs.index');
    Route::get('/staffs/add', [StaffsController::class, 'add'])->name('staffs.add');
    Route::post('/staffs/store', [StaffsController::class, 'store'])->name('staffs.store');
    Route::get('/staffs/edit/{id}', [StaffsController::class, 'edit'])->name('staffs.edit');
    Route::post('/staffs/update/{id}', [StaffsController::class, 'update'])->name('staffs.update');
    Route::get('/staffs/view/{id}', [StaffsController::class, 'view'])->name('staffs.view');
    Route::get('/staffs/delete/{id}', [StaffsController::class, 'delete'])->name('staffs.delete');

    Route::get('/salaryinfos', [SalaryinfosController::class, 'index'])->name('salaryinfos.index');
    Route::get('/salaryinfos/add', [SalaryinfosController::class, 'add'])->name('salaryinfos.add');
    Route::post('/salaryinfos/store', [SalaryinfosController::class, 'store'])->name('salaryinfos.store');
    Route::get('/salaryinfos/edit/{id}', [SalaryinfosController::class, 'edit'])->name('salaryinfos.edit');
    Route::post('/salaryinfos/update/{id}', [SalaryinfosController::class, 'update'])->name('salaryinfos.update');
    Route::get('/salaryinfos/view/{id}', [SalaryinfosController::class, 'view'])->name('salaryinfos.view');
    Route::get('/salaryinfos/delete/{id}', [SalaryinfosController::class, 'delete'])->name('salaryinfos.delete');
    Route::post('/salaryinfos/ajax', [SalaryinfosController::class,'ajax'])->name('salaryinfos.ajax');

    Route::get('/projectestimations', [ProjectestimationsController::class, 'admin_index'])->name('projectestimations.admin_index');
    Route::get('/projectestimations/add', [ProjectestimationsController::class, 'admin_add'])->name('projectestimations.admin_add');

});
