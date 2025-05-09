<?php

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
Route::get('/', function () {
    return view('welcome');
});

Route::view('/contact', 'pages.contact');
Route::post('/contact',function(HttpRequest $request){
    //$data = $request -> all();
    //$request->dd();
    $request-> validate([
        'name' => 'required | min:3 | max: 50',
        'email' => 'required | email',
        'content' => 'required',
    ]);
    
    $message = new Message();
    $message-> name = $request->name;
    $message-> email = $request->email;
    $message-> content = $request->content;
    $message->save();
    return redirect('/#contact');
    /*dd($request->all());
    thank you page return view('sections\header');*/
}); 

Route::get('/admin/messages',function(){
    $messages = Message::all();
    return view('messages.index', compact('messages'));
});

Route::get('/admin/messages/{id}',function($id){
    $message = Message::find($id);
    return view('messages.show',compact('message'));
});