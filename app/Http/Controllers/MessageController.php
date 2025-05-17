<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index(){
        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }

    public function store(Request $request){
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
        return redirect('/#contact')->with('success', 'Your message has been sent successfully!');
        /*dd($request->all());
        thank you page return view('sections\header');*/
    }

    public function show($id){
        $message = Message::findOrFail($id);
        return view('messages.show',compact('message'));
    }

    public function destroy(string $id)
    {
        $project = Message::findOrFail($id);
        $project->delete();
        return redirect()->back()->with('success', 'Message deleted successfully!');
    }
}