<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function __construct()
    {
    
    $this->middleware('permission:show contact us', ['only' => ['index']]);
    
    }

    public function index(){
        $messages = ContactUs::get()->all();

        return view('contact-us',compact('messages'));
    }
    public function view(){
        return view('contact-us-form');
    }
    public function store(Request $request){

        $message = new ContactUs;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;

        // Save the new message to the database
        $message->save();

        return redirect()->back()->with('success', 'Message Sent successfully'); 
    }

    }

