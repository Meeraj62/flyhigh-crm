<?php

use App\Http\Controllers\{
    AuthController,
    DashboardController,
    LeadController,
    StudentController,
    UniversityController,
    ProgramController,
    AppointmentController,
    CourseController,
    ServiceOrderController,
    SettingController
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('leads', LeadController::class);
    Route::resource('students', StudentController::class);
    Route::resource('universities', UniversityController::class);
    Route::resource('programs', ProgramController::class);
    Route::resource('appointments', AppointmentController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('service-orders', ServiceOrderController::class);

    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/', [SettingController::class, 'index'])->name('index');
        Route::put('/', [SettingController::class, 'update'])->name('update');
    });
});
