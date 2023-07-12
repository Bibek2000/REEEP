<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\myMailer;
use App\Models\Backend\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as Mymail;

class MailController extends Controller
{
    public function stores(ContactRequest $request)
    {
        // Validate the request to ensure it contains a file
        $contactData = $request->only(['name', 'subject', 'email', 'message']);
        Contact::create($contactData);
        Mymail::to($request['email'])->send(new myMailer(''));
        return redirect()->back()->with('success', 'We have received your message, Thank You!!!');
    }
}
