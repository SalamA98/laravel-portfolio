<?php

use App\Http\Controllers\Admin\AboutMeController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Models\Message;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;

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