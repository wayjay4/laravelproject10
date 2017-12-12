<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
      // local vars
      $value = 123;
      $name = $request->input('name');
      $message;

      $this->validate($request, [
        'name' => 'required',
        'email' => 'required'
      ]);

      // create a new message
      $message = new Message;
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');

      // save message
      $message->save();

      // redirect
      return redirect('/')->with('success', 'Message Sent');
    }

    public function getMessages(){
      $messages = Message::all();

      return view('messages', compact('messages'));
    }
}
