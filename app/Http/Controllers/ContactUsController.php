<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Illuminate\Support\Facades\Mail;
use App\Mail\info;

class ContactUsController extends Controller
{
    public function contactUS()
    {
        return view('pages.contact');
    }

    public function contactUSPost(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
         ]);
        ContactUS::create($request->all());

        // send to mail
        Mail::send('pages.email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'user_message' => $request->get('message')
        ), function($message)
    {
       // $message->from('mchess432@gmail.com');
        $message->to('info@interactiveelearningafrica.com', 'Admin')->subject('Feedback');
    });
    // finish sending to mail

        return back()->with('success', 'Thank you for contacting us!');
    }
}
