<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\KnowledgeRequest;
use App\Models\Backend\Knowledge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KnowledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $knowledgeData = Knowledge::get()->all();
        return view('backend.knowledge.index', compact('knowledgeData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.knowledge.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KnowledgeRequest $request)
    {
        // Validate the request to ensure it contains a file
        $knowledgeData = $request->only(['title', 'description', 'image', 'pdf']);;

        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('knowledge', $imageName, 'public');
        $knowledgeData['image'] = '/storage/knowledge/' . $imageName;

        $pdfName = time() . '.' . $request->pdf->extension();
        $request->pdf->storeAs('knowledge', $pdfName, 'public');
        $knowledgeData['pdf'] = '/storage/knowledge/' . $pdfName;
        Knowledge::create($knowledgeData);
        return redirect(route('knowledges.index'))->with('success', 'Knowledge created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Knowledge $knowledge)
    {
        return view('backend.knowledge.show', compact('knowledge'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Knowledge $knowledge)
    {
        if (!$knowledge) {
            request()->session()->flash('error', "Error:Invalid Request");
            return redirect()->back();
        }
        return view('backend.knowledge.edit', compact('knowledge'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KnowledgeRequest $request, Knowledge $knowledge)
    {
        $knowledgeData = $request->only(['title', 'description', 'image', 'pdf']);

        if ($request->image) {

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('knowledge', $imageName, 'public');
            $knowledgeData['image'] = '/storage/knowledge/' . $imageName;

            $trimmedPath = trim(str_replace("/storage/", "", $knowledge->image));

            if (Storage::disk('public')->exists($trimmedPath)) {

                Storage::disk('public')->delete($trimmedPath);
            }
        }

        if ($request->pdf) {

            $pdfName = time() . '.' . $request->pdf->extension();
            $request->pdf->storeAs('knowledge', $pdfName, 'public');
            $knowledgeData['pdf'] = '/storage/knowledge/' . $pdfName;

            $trimmedPath = trim(str_replace("/storage/", "", $knowledge->pdf));

            if (Storage::disk('public')->exists($trimmedPath)) {

                Storage::disk('public')->delete($trimmedPath);
            }
        }

        $knowledge->update($knowledgeData);
        return redirect(route('knowledges.index'))->with('success', "Knowledge updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Knowledge $knowledge)
    {
        $knowledge->delete();
        return redirect()->back();
    }
}
