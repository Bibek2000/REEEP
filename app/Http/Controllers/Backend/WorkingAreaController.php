<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\WorkingAreaRequest;
use App\Models\Backend\WorkingArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkingAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workingareaData = WorkingArea::get()->all();
        return view('backend.workingarea.index', compact('workingareaData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.workingarea.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WorkingAreaRequest $request)
    {
        // Validate the request to ensure it contains a file
        $workingareaData = $request->only(['title', 'description', 'image']);;

        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('workingarea', $imageName, 'public');
        $workingareaData['image'] = '/storage/workingarea/' . $imageName;
        WorkingArea::create($workingareaData);
        return redirect(route('workingareas.index'))->with('success', 'WorkingArea created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkingArea $workingarea)
    {
        return view('backend.workingarea.show', compact('workingarea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkingArea $workingarea)
    {
        if (!$workingarea) {
            request()->session()->flash('error', "Error:Invalid Request");
            return redirect()->back();
        }
        return view('backend.workingarea.edit', compact('workingarea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WorkingAreaRequest $request, WorkingArea $workingarea)
    {
        $workingareaData = $request->only(['title', 'description', 'image']);;

        if ($request->image) {

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('workingarea', $imageName, 'public');
            $workingareaData['image'] = '/storage/workingarea/' . $imageName;

            $trimmedPath = trim(str_replace("/storage/", "", $workingarea->image));

            if (Storage::disk('public')->exists($trimmedPath)) {

                Storage::disk('public')->delete($trimmedPath);
            }
        }

        $workingarea->update($workingareaData);
        return redirect(route('workingareas.index'))->with('success', "WorkingArea updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkingArea $workingarea)
    {
        $workingarea->delete();
        return redirect()->back();
    }
}
