<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\ContactMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function contact()
    {
        return view('welcome');
    }
    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('wafabenfatma@gmail.com')->send(new ContactMail($details));
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}