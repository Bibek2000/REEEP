<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PhoneRequest;
use App\Models\Backend\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phoneData = Phone::get()->all();
        return view('backend.phone.index', compact('phoneData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.phone.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PhoneRequest $request)
    {
        // Validate the request to ensure it contains a file
        $phoneData = $request->only(['name', 'location', 'email', 'phone', 'maps']);
        if(Phone::count() >= 1){
            return redirect(route('phones.index'))->with('danger', 'Only one entry allowed');
        }
        Phone::create($phoneData);
        return redirect(route('phones.index'))->with('success', 'Phone created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Phone $phone)
    {
        return view('backend.phones.show', compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phone $phone)
    {
        if (!$phone) {
            request()->session()->flash('error', "Error:Invalid Request");
            return redirect()->back();
        }
        return view('backend.phone.edit', compact('phone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PhoneRequest $request, Phone $phone)
    {
        $phoneData = $request->only(['name', 'location', 'email', 'phone', 'maps']);;;

        $phone->update($phoneData);
        return redirect(route('phones.index'))->with('success', "Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phone $phone)
    {
        $phone->delete();
        return redirect()->back();
    }
}
