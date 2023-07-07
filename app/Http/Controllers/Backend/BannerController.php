<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Backend\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bannerData = Banner::get()->all();
        return view('backend.banner.index', compact('bannerData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
//

    public function store(BannerRequest $request)
    {
        // Validate the request to ensure it contains a file
        $bannerData = $request->only(['title', 'description', 'image']);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('banner', $imageName, 'public');
        $bannerData['image'] = '/storage/banner/' . $imageName;
        Banner::create($bannerData);
        return redirect(route('banners.index'))->with('success', 'Banner created successfully');

    }



    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        return view('backend.banner.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        if (!$banner) {
            request()->session()->flash('error', "Error:Invalid Request");
            return redirect()->back();
        }
        return view('backend.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BannerRequest $request, Banner $banner)
    {
        $bannerData = $request->only(['title', 'description', 'image']);

        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('banner', $imageName, 'public');
            $bannerData['image'] = '/storage/banner/' . $imageName;

            $trimmedPath = trim(str_replace("/storage/", "", $banner->image));

            if (Storage::disk('public')->exists($trimmedPath)) {

                Storage::disk('public')->delete($trimmedPath);
            }
        }

        $banner->update($bannerData);
        return redirect(route('banners.index'))->with('success', "Banner updated successfully");
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->back();
    }
}
