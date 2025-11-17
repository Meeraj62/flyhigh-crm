<?php

use App\Http\Controllers\{
    AuthController,
    DashboardController,
    HomeController,
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

// Public Website Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services/{slug}', [HomeController::class, 'serviceDetail'])->name('public.service.detail');
Route::get('/services', [HomeController::class, 'services'])->name('public.services');
Route::get('/public/universities/{slug}', [HomeController::class, 'universityDetail'])->name('public.university.detail');
Route::get('/public/universities', [HomeController::class, 'universities'])->name('public.universities');
Route::get('/public/programs/{slug}', [HomeController::class, 'programDetail'])->name('public.program.detail');
Route::get('/public/programs', [HomeController::class, 'programs'])->name('public.programs');
Route::get('/public/courses/{slug}', [HomeController::class, 'courseDetail'])->name('public.course.detail');
Route::get('/public/courses', [HomeController::class, 'courses'])->name('public.courses');
Route::get('/blog/{slug}', [HomeController::class, 'blogPost'])->name('public.blog.post');
Route::get('/blog', [HomeController::class, 'blog'])->name('public.blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'contactSubmit'])->name('contact.submit');

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    // Password Reset Routes (placeholder)
    Route::get('/forgot-password', function() { return redirect()->route('login'); })->name('password.request');
    Route::post('/forgot-password', function() { return redirect()->route('login'); })->name('password.email');
});

// Admin/Dashboard Routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Admin Leads Management
    Route::prefix('admin')->group(function() {
        Route::get('/leads', [LeadController::class, 'index'])->name('leads.index');
        Route::get('/leads/form/{lead?}', [LeadController::class, 'form'])->name('leads.form');
        Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');
        Route::put('/leads/{lead}', [LeadController::class, 'update'])->name('leads.update');
        Route::delete('/leads/{lead}', [LeadController::class, 'destroy'])->name('leads.destroy');

        Route::get('/students', [StudentController::class, 'index'])->name('students.index');
        Route::get('/students/form/{student?}', [StudentController::class, 'form'])->name('students.form');
        Route::post('/students', [StudentController::class, 'store'])->name('students.store');
        Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
        Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');

        Route::get('/universities', [UniversityController::class, 'index'])->name('universities.index');
        Route::get('/universities/form/{university?}', [UniversityController::class, 'form'])->name('universities.form');
        Route::post('/universities', [UniversityController::class, 'store'])->name('universities.store');
        Route::put('/universities/{university}', [UniversityController::class, 'update'])->name('universities.update');
        Route::delete('/universities/{university}', [UniversityController::class, 'destroy'])->name('universities.destroy');

        Route::get('/programs', [ProgramController::class, 'index'])->name('programs.index');
        Route::get('/programs/form/{program?}', [ProgramController::class, 'form'])->name('programs.form');
        Route::post('/programs', [ProgramController::class, 'store'])->name('programs.store');
        Route::put('/programs/{program}', [ProgramController::class, 'update'])->name('programs.update');
        Route::delete('/programs/{program}', [ProgramController::class, 'destroy'])->name('programs.destroy');

        Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
        Route::get('/appointments/form/{appointment?}', [AppointmentController::class, 'form'])->name('appointments.form');
        Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
        Route::put('/appointments/{appointment}', [AppointmentController::class, 'update'])->name('appointments.update');
        Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');

        Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
        Route::get('/courses/form/{course?}', [CourseController::class, 'form'])->name('courses.form');
        Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
        Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
        Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

        Route::resource('service-orders', ServiceOrderController::class);

        Route::prefix('settings')->name('settings.')->group(function () {
            Route::get('/', [SettingController::class, 'index'])->name('index');
            Route::put('/', [SettingController::class, 'update'])->name('update');
        });
    });
});
