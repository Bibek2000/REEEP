<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\Backend\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsData = News::get()->all();
        return view('backend.news.index', compact('newsData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {

        // Validate the request to ensure it contains a file
        $newsData = $request->only(['title', 'description', 'image', 'category']);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('news', $imageName, 'public');
        $newsData['image'] = '/storage/news/' . $imageName;
        News::create($newsData);
        return redirect(route('news.index'))->with('success', 'News created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('backend.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        if (!$news) {
            request()->session()->flash('error', "Error:Invalid Request");
            return redirect()->back();
        }
        return view('backend.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequest $request, News $news)
    {
        $newsData = $request->only(['title', 'description', 'image', 'category']);

        if ($request->image) {

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('news', $imageName, 'public');
            $newsData['image'] = '/storage/news/' . $imageName;

            $trimmedPath = trim(str_replace("/storage/", "", $news->image));

            if (Storage::disk('public')->exists($trimmedPath)) {

                Storage::disk('public')->delete($trimmedPath);
            }
        }

        $news->update($newsData);
        return redirect(route('news.index'))->with('success', "News updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->back();
    }
}
