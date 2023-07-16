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
        $perPage = 5; // Number of items per page
        $currentPage = request()->get('page', 1); // Get the current page from the query parameters, default to 1

        $offset = ($currentPage - 1) * $perPage; // Calculate the offset based on the current page number
        $contactData = Contact::offset($offset)->paginate($perPage, ['*'], 'page', $currentPage);

        // Calculate the total count of contacts
        $totalCount = Contact::count();

        // Set the starting number based on the current page
        $startingNumber = ($currentPage - 1) * $perPage + 1;

        // Pass the starting number and total count to the view
        return view('backend.contact.index', compact('contactData', 'startingNumber', 'totalCount'));
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
