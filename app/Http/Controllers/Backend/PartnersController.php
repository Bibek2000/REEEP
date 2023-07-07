<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerRequest;
use App\Models\Backend\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partnersData = Partner::get()->all();
        return view('backend.partners.index', compact('partnersData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartnerRequest $request)
    {

        // Validate the request to ensure it contains a file
        $partnersData = $request->only(['name', 'externallink', 'image']);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('partners', $imageName, 'public');
        $partnersData['image'] = '/storage/partners/' . $imageName;
        Partner::create($partnersData);
        return redirect(route('partners.index'))->with('success', 'Partner created successfully');
    }

//    /**
//     * Display the specified resource.
//     */
//    public function show(Partner $partners)
//    {
//        return view('backend.partners.show', compact('partners'));
//    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        if (!$partner) {
            request()->session()->flash('error', "Error:Invalid Request");
            return redirect()->back();
        }
        return view('backend.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartnerRequest $request, Partner $partner)
    {
        $partnersData = $request->only(['name', 'externallink', 'image']);

        if ($request->image) {

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('partners', $imageName, 'public');
            $partnersData['image'] = '/storage/partners/' . $imageName;

            $trimmedPath = trim(str_replace("/storage/", "", $partner->image));

            if (Storage::disk('public')->exists($trimmedPath)) {

                Storage::disk('public')->delete($trimmedPath);
            }
        }

        $partner->update($partnersData);
        return redirect(route('partners.index'))->with('success', "Partner updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect()->back();
    }
}
