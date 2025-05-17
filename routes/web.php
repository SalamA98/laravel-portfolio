<?php

use App\Http\Controllers\Admin\AboutMeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Models\Message;
use App\Models\Project;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use App\Models\Certificate;
use App\Http\Controllers\Admin\DashboardController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [HomeController::class, 'welcome'] )->name('home');

Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/contact',[MessageController::class ,'store'])->name('message.store'); 

Route::get('/certificates', function () {
    $certificates = Certificate::all();
    return view('sections.certificates', compact('certificates'));
})->name('public.certificates');

Route::get('/projects', function () {
    $projects = Project::all();
    return view('sections.projects', compact('projects'));
})->name('public.projects');


Route::prefix('admin')->group(function () {

    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
            
        //AboutMe
        Route::get('/about/edit', [AboutMeController::class, 'edit'])->name('about.edit');
        Route::put('/about/update/{id}', [AboutMeController::class, 'update'])->name('about.update');

        //Messages
        Route::get('/messages',[MessageController::class , 'index'])->name('message.index');
        Route::get('/messages/{id}',[MessageController::class , 'show'])->name('messages.show');
        Route::delete('/messages/delete/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');        
        
        // Certificates CRUD
        Route::get('/certificates', [CertificateController::class, 'index'])->name('certificates.index');
        Route::get('/certificates/create', [CertificateController::class, 'create'])->name('certificates.create');
        Route::post('/certificates/store', [CertificateController::class, 'store'])->name('certificates.store');
        Route::get('/certificates/show/{id}', [CertificateController::class, 'show'])->name('certificates.show');
        Route::get('/certificates/edit/{id}', [CertificateController::class, 'edit'])->name('certificates.edit');
        Route::put('/certificates/update/{id}', [CertificateController::class, 'update'])->name('certificates.update');
        Route::delete('/certificates/delete/{id}', [CertificateController::class, 'destroy'])->name('certificates.destroy');

        // Projects CRUD
        Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
        Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
        Route::post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');
        Route::get('/projects/show/{id}', [ProjectController::class, 'show'])->name('projects.show');
        Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
        Route::put('/projects/update/{id}', [ProjectController::class, 'update'])->name('projects.update');
        Route::delete('/projects/delete/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');

    });


});