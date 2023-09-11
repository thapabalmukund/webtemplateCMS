<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\AboutusController;
use App\Http\Controllers\Frontend\ClientsController;
use App\Http\Controllers\Frontend\ProjectsController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\ContactusController;
use App\Http\Controllers\Backend\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/auth', function () {
    return view('Dashboard.auth-login');
});

Route::get('/auth-reg', function () {
    return view('Dashboard.auth-register');
});
Route::get('/auth-reset', function () {
    return view('Dashboard.auth-resetpw');
});
Route::get('/auth-half', function () {
    return view('Dashboard.auth-login-half');
});

Route::get('/main', function () {
    return view('dashboard.layouts.main');
});

Route::get('/', function () {
    return view('welcome');
});


//WEBSITE VIEW PAGES ROUTE & FUNCTION 
// normal Users can see the content of the pages.
Route::get('/index', [IndexController::class, 'Display']);
Route::get('/about', [AboutusController::class, 'Display']);
Route::get('/client', [ClientsController::class, 'Display']);
Route::get('/contact', [ContactusController::class, 'Display']);
Route::get('/project', [ProjectsController::class, 'Display']);
Route::get('/service', [ServicesController::class, 'Display']);



// route of view page after change in content

Route::get('/indexx', [AdminController::class, 'Change'])->name('change.index');
Route::get('/aboutt', [AdminController::class, 'Change1'])->name('change.about');
Route::get('/clientt', [AdminController::class, 'Change2'])->name('change.client');
Route::get('/contactt', [AdminController::class, 'Change3'])->name('change.contact');
Route::get('/projectt', [AdminController::class, 'Change4'])->name('change.project');
Route::get('/servicee', [AdminController::class, 'Change5'])->name('change.service');


//Admin can change content by the help this route
Route::resource('index', IndexController::class);
Route::resource('about', AboutUsController::class);
Route::resource('clients', ClientsController::class);
Route::resource('contact', ContactUsController::class);
Route::resource('projects', ProjectsController::class);
Route::resource('services', ServicesController::class);

Auth::routes();
Route::middleware(['userRole'])->group(function () {

});

// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin')->middleware('userRole');
// Route::prefix('secure')->group(function () {


// });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dash', function () {
    return view('Dashboard.dashboard-system');
});