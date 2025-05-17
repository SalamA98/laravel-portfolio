<?php

use App\Http\Controllers\Admin\AboutMeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ProjectController;
use App\Models\Message;
use App\Models\Project;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use App\Models\Certificate;

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

Route::view('/contact', 'pages.contact')->name('contact');;

Route::post('/contact',[MessageController::class ,'store'])->name('message.store'); 
Route::get('/admin/messages',[MessageController::class , 'index'])->name('message.index');
Route::get('/admin/messages/{id}',[MessageController::class , 'show'])->name('messages.show');

Route::get('/admin/about/edit', [AboutMeController::class, 'edit'])->name('about.edit');
Route::put('/admin/about/update/{id}', [AboutMeController::class, 'update'])->name('about.update');



Route::get('/certificates', function () {
    $certificates = Certificate::all();
    return view('sections.certificates', compact('certificates'));
})->name('public.certificates');

Route::get('/project', function () {
    $projects = Project::all();
    return view('sections.project', compact('project'));
})->name('public.project');

Route::get('/admin/certificates', [CertificateController::class, 'index'])->name('certificates.index');
Route::get('/admin/certificates/create', [CertificateController::class, 'create'])->name('certificates.create');
Route::post('/admin/certificates/store', [CertificateController::class, 'store'])->name('certificates.store');
Route::get('/admin/certificates/show/{id}', [CertificateController::class, 'show'])->name('certificates.show');
Route::get('/admin/certificates/edit/{id}', [CertificateController::class, 'edit'])->name('certificates.edit');
Route::put('/admin/certificates/update/{id}', [CertificateController::class, 'update'])->name('certificates.update');
Route::delete('/admin/certificates/delete/{id}', [CertificateController::class, 'destroy'])->name('certificates.destroy');

Route::get('/admin/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/admin/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/admin/projects/store', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/admin/projects/show/{id}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/admin/projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('/admin/projects/update/{id}', [ProjectController::class, 'update'])->name('projects.update');
Route::delete('/admin/projects/delete/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');

