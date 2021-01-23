<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        if ($request->method() == 'POST') {
            $body = "<p><b>Name  :</b>{$request->input('inputName')}</p>";
            $body .= "<p><b>email  :</b>{$request->input('inputEmail')}</p>";
            $body .= "<p><b>Message  :</b><br>" . nl2br($request->input('inputMessage')) . "</p>";
            Mail::to('maksim.chernyshev@gmail.com')->send(new ContactMail($body));
            $request->session()->flash('success', 'Email sent');
            return redirect('/');
        }
        return view('email.emailform');
    }
}
