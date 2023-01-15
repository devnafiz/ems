<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Student\RegistrationController;
use App\Http\Controllers\Student\StudentRegistrationController;
use App\Http\Controllers\Admin\ApplicationController;
use App\Http\Controllers\Agency\AgencyController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\ApplicationStatusController;
use App\Http\Controllers\Admin\ApplicationProgressController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\SubjectController;

use App\Http\Controllers\Institute\InstituteController;
use App\Http\Controllers\HomeController;

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

Route::get('/institute',function(){
  
  return view('institute.register');
});

Route::get('/student/status',[HomeController::class,'searchstatus'])->name('status.check');
Route::get('/student/application/info',[HomeController::class,'searchApplication'])->name('student.application');
Route::get('/student/info',[HomeController::class,'studentInfo'])->name('status.info');

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
   
    Route::post('/application/status/update/{id}',[ApplicationProgressController::class,'UpdateStatus'])->name('application.status.update');
    

    Route::get('/all-agency',[IndexController::class,'allAgency'])->name('all.agency');
    Route::get('/agency/details/{id}',[IndexController::class,'AgencyView'])->name('agency.details');
    Route::get('/agency/edit/{id}',[IndexController::class,'EditAgency'])->name('agency.edit');
    Route::post('/agency/update/{id}',[IndexController::class,'updateAgency'])->name('agency.update');
    Route::get('/agency/inactive/{id}', [IndexController::class, 'AgencyInactive'])->name('agency.inactive');

    Route::get('/agency/active/{id}', [IndexController::class, 'AgencyActive'])->name('agency.active');
    Route::get('/agency/delete/{id}', [IndexController::class, 'AgencyDelete'])->name('agency.delete');

    //all Student

   // Route::get('/all-student',[IndexController::class,'allStudents'])->name('all.students');

     Route::resource('/student',StudentController::class);
     Route::get('/student/inactive/{id}', [StudentController::class, 'StudentInactive'])->name('student.inactive');

     Route::get('/student/active/{id}', [StudentController::class, 'StudentActive'])->name('student.active');

    // Application Status
     Route::resource('/application/status',ApplicationStatusController::class);
     Route::get('/status/inactive/{id}', [ApplicationStatusController::class, 'StatusInactive'])->name('status.inactive');

     Route::get('/status/active/{id}', [ApplicationStatusController::class, 'StatusActive'])->name('status.active');

     //status progress


    // Route::get('/application/status/add/{id}',[ApplicationProgressController::class,'addStatus'])->name('application.status.add');

     Route::resource('/programmes',ProgramController::class);

     Route::resource('/subjects',SubjectController::class);
     Route::get('/subjects/status/inactive/{id}', [SubjectController::class, 'StatusInactive'])->name('subjects.inactive');

     Route::get('/subjects/status/active/{id}', [SubjectController::class, 'StatusActive'])->name('subjects.active');





    

});

Route::middleware(['auth', 'role:student'])->name('student.')->prefix('student')->group(function(){
    //Route::resource('/registration', RegistrationController::class);
    Route::resource('/registration', StudentRegistrationController::class);
    Route::get('/getSubject/{id}', [StudentRegistrationController::class, 'getSubject'])->name('getSubject');
    Route::get('/profile/{id}',[StudentRegistrationController::class,'getProfile'])->name('get.student.profile');
    Route::get('/profile/edit/{id}',[StudentRegistrationController::class,'editProfile'])->name('edit.student.profile');
    Route::post('/profile/update/{id}',[StudentRegistrationController::class,'UpdateProfile'])->name('profile.update');
   
});

//agency

Route::middleware(['auth','role:agency'])->name('agency.')->prefix('agency')->group(function(){

    Route::get('/profile/view/{id}',[AgencyController::class,'viewAgency'])->name('get.agency.profile');
    Route::get('/profile/{id}',[AgencyController::class,'EditAgency'])->name('edit.agency.profile');
    Route::post('/profile/update/{id}',[AgencyController::class,'updateAgency'])->name('profile.update');

    Route::get('/all-application',[AgencyController::class,'index'])->name('all.apllication');
    Route::get('/application/details/{id}',[AgencyController::class,'show'])->name('application.show');

});

//Institute

Route::middleware(['auth','role:institute'])->name('institute.')->prefix('institute')->group(function(){
     Route::get('/profile/view/{id}',[InstituteController::class,'viewProfile'])->name('get.profile');
     Route::get('/profile/{id}',[InstituteController::class,'editProfile'])->name('edit.profile');
     Route::post('/profile/update/{id}',[InstituteController::class,'UpdateProfile'])->name('profile.update');

      Route::resource('/all-application', InstituteController::class);

});



require __DIR__.'/auth.php';
