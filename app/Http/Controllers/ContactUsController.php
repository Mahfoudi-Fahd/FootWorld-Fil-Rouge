<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        return view('contact-us');
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

