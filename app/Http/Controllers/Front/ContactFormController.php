<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('front.contact.contact_form');
    }

    public function send(ContactFormRequest $request)
    {
        Mail::to(env('MAIL_USERNAME'))->send(new ContactForm($request->validated()));

        return redirect('/')->with('success', 'Thank you! your message sent successfully.');
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
