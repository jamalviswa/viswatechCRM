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
use App\Http\Controllers\ClientsMeetingController;
use App\Http\Controllers\StaffsController;
use App\Http\Controllers\SalaryInfoController;
use App\Http\Controllers\SalaryIncrementController;

Route::prefix('admin')->group(function () {
    //login
    
    Route::get('/', [AdminusersController::class, 'login'])->name('adminusers.login')->middleware('guest');
    Route::post('/authenticate', [AdminusersController::class,'authenticate'])->name('adminusers.authenticate')->middleware('guest');
    
    //forget
    
    Route::any('/forgot', [AdminusersController::class, 'forgot'])->name('adminusers.forgot')->middleware('guest');

    //dashboard
    
    Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index')->Middleware('auth');

     //staff management

     Route::get('/staffs', [StaffsController::class, 'staff_index'])->name('staffs.staff_index')->Middleware('auth');
     Route::get('/staffs/add', [StaffsController::class, 'staff_add'])->name('staffs.staff_add')->Middleware('auth');
     Route::post('/staffs/store', [StaffsController::class, 'staff_store'])->name('staffs.staff_store')->Middleware('auth');
     Route::get('/staffs/edit/{id}', [StaffsController::class, 'staff_edit'])->name('staffs.staff_edit')->Middleware('auth');
     Route::post('/staffs/update/{id}', [StaffsController::class, 'staff_update'])->name('staffs.staff_update')->Middleware('auth');
     Route::get('/staffs/view/{id}', [StaffsController::class, 'staff_view'])->name('staffs.staff_view')->Middleware('auth');
     Route::get('/staffs/delete/{id}', [StaffsController::class, 'staff_delete'])->name('staffs.staff_delete')->Middleware('auth');
 
    //Client List
    Route::get('/clients', [ClientsController::class, 'admin_index'])->name('clients.admin_index')->Middleware('auth');
    Route::get('/clients/add', [ClientsController::class, 'admin_add'])->name('clients.admin_add')->Middleware('auth');
    Route::post('/clients/store', [ClientsController::class, 'admin_store'])->name('clients.admin_store')->Middleware('auth');
    Route::get('/clients/edit/{id}', [ClientsController::class, 'admin_edit'])->name('clients.admin_edit')->Middleware('auth');
    Route::post('/clients/update/{id}', [ClientsController::class, 'admin_update'])->name('clients.admin_update')->Middleware('auth');
    Route::get('/clients/view/{id}', [ClientsController::class, 'admin_view'])->name('clients.admin_view')->Middleware('auth');
    Route::get('/clients/delete/{id}', [ClientsController::class, 'admin_delete'])->name('clients.admin_delete')->Middleware('auth');


    //client Meetings
    Route::get('/clients/meetings', [ClientsMeetingController::class, 'meeting_index'])->name('clients.meeting_index')->Middleware('auth');
    Route::get('/clients/meetings/add', [ClientsMeetingController::class, 'meeting_add'])->name('clients.meeting_add')->Middleware('auth');
    Route::post('/clients/meetings/store', [ClientsMeetingController::class, 'meeting_store'])->name('clients.meeting_store')->Middleware('auth');
    Route::get('/clients/meetings/edit/{id}', [ClientsMeetingController::class, 'meeting_edit'])->name('clients.meeting_edit')->Middleware('auth');
    Route::post('/clients/meetings/update/{id}', [ClientsMeetingController::class, 'meeting_update'])->name('clients.meeting_update')->Middleware('auth');
    Route::get('/clients/meetings/view/{id}', [ClientsMeetingController::class, 'meeting_view'])->name('clients.meeting_view')->Middleware('auth');
    Route::get('/clients/meetings/delete/{id}', [ClientsMeetingController::class, 'meeting_delete'])->name('clients.meeting_delete')->Middleware('auth');

    //salary info management

    Route::get('/salary/info', [SalaryInfoController::class, 'salary_info_index'])->name('salary.salary_info_index')->Middleware('auth');
    Route::get('/salary/info/add', [SalaryInfoController::class, 'salary_info_add'])->name('salary.salary_info_add')->Middleware('auth');
    Route::post('/salary/info/store', [SalaryInfoController::class, 'salary_info_store'])->name('salary.salary_info_store')->Middleware('auth');
    Route::get('/salary/info/edit/{id}', [SalaryInfoController::class, 'salary_info_edit'])->name('salary.salary_info_edit')->Middleware('auth');
    Route::post('/salary/info/update/{id}', [SalaryInfoController::class, 'salary_info_update'])->name('salary.salary_info_update')->Middleware('auth');
    Route::get('/salary/info/view/{id}', [SalaryInfoController::class, 'salary_info_view'])->name('salary.salary_info_view')->Middleware('auth');
    Route::get('/salary/info/delete/{id}', [SalaryInfoController::class, 'salary_info_delete'])->name('salary.salary_info_delete')->Middleware('auth');

    Route::post('/salary/info/ajax', [SalaryInfoController::class, 'ajax'])->name('salary.ajax');

    //salary increment management

    Route::get('/salary/increment', [SalaryIncrementController::class, 'increment_index'])->name('salary.salary_increment_index')->Middleware('auth');
    Route::get('/salary/increment/add', [SalaryIncrementController::class, 'increment_add'])->name('salary.salary_increment_add')->Middleware('auth');
    Route::post('/salary/increment/store', [SalaryIncrementController::class, 'increment_store'])->name('salary.salary_increment_store')->Middleware('auth');
    Route::get('/salary/increment/edit/{id}', [SalaryIncrementController::class, 'increment_edit'])->name('salary.salary_increment_edit')->Middleware('auth');
    Route::post('/salary/increment/update/{id}', [SalaryIncrementController::class, 'increment_update'])->name('salary.salary_increment_update')->Middleware('auth');
    Route::get('/salary/increment/view/{id}', [SalaryIncrementController::class, 'increment_view'])->name('salary.salary_increment_view')->Middleware('auth');
    Route::get('/salary/increment/delete/{id}', [SalaryIncrementController::class, 'increment_delete'])->name('salary.salary_increment_delete')->Middleware('auth');

    Route::post('/salary/increment/ajax', [SalaryIncrementController::class, 'increment_ajax'])->name('increment.ajax');

    
    //logout
    Route::get('/logout', [AdminusersController::class,'logout'])->name('adminusers.logout');

});
