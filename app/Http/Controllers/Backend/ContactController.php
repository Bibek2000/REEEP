<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\myMailer;
use App\Models\Backend\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail as Mymail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactData = Contact::get()->all();
        return view('backend.contact.index', compact('contactData'));
    }

//    /**
//     * Show the form for creating a new resource.
//     */
//    public function create()
//    {
//        return view('backend.contact.create');
//    }




    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('backend.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, Contact $contact)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back();
    }
}
