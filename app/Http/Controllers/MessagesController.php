<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;

class MessagesController extends Controller
{
    public function submit(Request $request) {
    	$this->validate($request,[
    		'name'=>'required',
    		'email'=>'required'
    		]);
    	// Create the message
    	$message = new Messages;
    	$message->name = $request->Input('name');
    	$message->email = $request->Input('email');
    	$message->message = $request->Input('message');
    	//save the message
    	$message->save();

    	return redirect('/')->with('success','Message sent');
    }
}
