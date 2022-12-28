<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Student\RegistrationController;
use App\Http\Controllers\Student\StudentRegistrationController;
use App\Http\Controllers\Admin\ApplicationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', function () {
    return view('student.register');
})->name('student');

Route::get('/agency', function () {
    return view('agency.register');
});

Route::get('/dashboard',[IndexController::class, 'index'], function () {
   // return view('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/dashboard', [IndexController::class, 'index'])->name('index');

    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');

    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'distroy'])->name('users.distroy');

    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');

    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');

    Route::resource('/all-application',ApplicationController::class);
    Route::get('/application/details/{id}',[ApplicationController::class,'pdf'])->name('application.pdf');

    Route::get('/all-agency',[IndexController::class,'allAgency'])->name('all.agency');
    Route::get('/agency/details/{id}',[IndexController::class,'AgencyView'])->name('agency.details');
    Route::get('/agency/edit/{id}',[IndexController::class,'EditAgency'])->name('agency.edit');
    Route::post('/agency/update/{id}',[IndexController::class,'updateAgency'])->name('agency.update');
});

Route::middleware(['auth', 'role:student'])->name('student.')->prefix('student')->group(function(){
    //Route::resource('/registration', RegistrationController::class);
    Route::resource('/registration', StudentRegistrationController::class);
    Route::get('/getSubject/{id}', [StudentRegistrationController::class, 'getSubject'])->name('getSubject');
    Route::get('/profile/{id}',[StudentRegistrationController::class,'getProfile'])->name('get.student.profile');
   
});



require __DIR__.'/auth.php';
