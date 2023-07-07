<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\Backend\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutData = About::get()->all();
        return view('backend.about.index', compact('aboutData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aboutData = $request->only(['title', 'description', 'image']);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('about', $imageName, 'public');
        $aboutData['image'] = '/storage/about/' . $imageName;
        About::create($aboutData);
        return redirect(route('abouts.index'))->with('success', 'About created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('backend.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        if (!$about) {
            request()->session()->flash('error', "Error:Invalid Request");
            return redirect()->back();
        }
        return view('backend.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutRequest $request, About $about)
    {
        $aboutData = $request->only(['title', 'description', 'image']);

        if ($request->image) {

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('about', $imageName, 'public');
            $aboutData['image'] = '/storage/about/' . $imageName;

            $trimmedPath = trim(str_replace("/storage/", "", $about->image));

            if (Storage::disk('public')->exists($trimmedPath)) {

                Storage::disk('public')->delete($trimmedPath);
            }
        }

        $about->update($aboutData);
        return redirect(route('about.index'))->with('success', "About updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->back();
    }
}
