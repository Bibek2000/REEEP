<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Backend\Album;
use App\Models\Backend\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleryData = Gallery::get();
        return view('backend.gallery.index', compact('galleryData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $album['record'] = Album::pluck('name','id');

        return view('backend.gallery.create', compact('album'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryRequest $request)
    {
//         Validate the request to ensure it contains a file
        $galleryData = $request->only(['title', 'description', 'image', 'album_id']);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('gallery', $imageName, 'public');
        $galleryData['image'] = '/storage/gallery/' . $imageName;
        Gallery::create($galleryData);
        return redirect(route('galleries.index'))->with('success', 'Gallery created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        return view('backend.gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        $album['record'] = Album::pluck('name','id');
        if (!$gallery) {
            request()->session()->flash('error', "Error:Invalid Request");
            return redirect()->back();
        }
        return view('backend.gallery.edit', compact('gallery', 'album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        $galleryData = $request->only(['title', 'description', 'image', 'album_id']);

        if ($request->image) {

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('gallery', $imageName, 'public');
            $galleryData['image'] = '/storage/gallery/' . $imageName;

            $trimmedPath = trim(str_replace("/storage/", "", $gallery->image));

            if (Storage::disk('public')->exists($trimmedPath)) {

                Storage::disk('public')->delete($trimmedPath);
            }
        }

        $gallery->update($galleryData);
        return redirect(route('galleries.index'))->with('success', "Gallery updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->back();
    }
}
