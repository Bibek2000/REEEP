<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlbumRequest;
use App\Models\Backend\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albumData = Album::get()->all();
        return view('backend.album.index', compact('albumData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.album.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlbumRequest $request)
    {
        $albumData = $request->only(['name', 'image']);;
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('album', $imageName, 'public');
        $albumData['image'] = '/storage/album/' . $imageName;
        Album::create($albumData);
        return redirect(route('albums.index'))->with('success', 'Album created successfully');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        if (!$album) {
            request()->session()->flash('error', "Error:Invalid Request");
            return redirect()->back();
        }
        return view('backend.album.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlbumRequest $request, Album $album)
    {
        $albumData = $request ->only(['name', 'image']);;

        if ($request->image) {

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('album', $imageName, 'public');
            $albumData['image'] = '/storage/album/' . $imageName;

            $trimmedPath = trim(str_replace("/storage/", "", $album->image));

            if (Storage::disk('public')->exists($trimmedPath)) {

                Storage::disk('public')->delete($trimmedPath);
            }
        }

        $album->update($albumData);
        return redirect(route('albums.index'))->with('success', "Banner updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->back();
    }
}
