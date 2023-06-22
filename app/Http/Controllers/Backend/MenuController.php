<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\AppointmentStatusChanged;
use App\Models\Backend\Appointment;
use App\Models\Backend\Role;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as Mymail;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::get()->all();
        return view('backend.menu.index', compact('menus'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $menuData = Menu::all()->groupBy('parent_id')->mapWithKeys(function ($items, $parent_id) {
            return [$parent_id => $items->pluck('name', 'id')];
        })->toArray();
        $menuOptions = [];
        $childMenuOptions = [];

        foreach ($menuData as $parentKey => $items) {
            if ($parentKey === "") {
                $menuOptions = $items;
            } else {
                $childMenuOptions[$parentKey] = $items;
            }
        }

        return view('backend.menu.create', compact('menuOptions', 'childMenuOptions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'slug' => 'required',
           'order' => 'required',
        ]);
        $menus = Menu::create($request->all());
        if($menus){
            return redirect(route('menus.index'))->with('success', "Menu Created successfully");
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Menu::find($id);

        if (!$data) {
            request()->session()->flash('error', "Error:Invalid Request");
            return redirect()->back();

        }
        return view('backend.menu.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Menu::find($id);
        if(!$data){
            request()->session()->flash('error',"Error:Invalid Request");
            return redirect()->route('role.index');
        }
        if($data->delete())
        {
            request()->session()->flash('success',"Successfully Deleted");
        }else{
            request()->session()->flash('error',"Error:Delete Failed ");
        }
        return redirect()->route('menus.index');
    }

//    Status approval for menu
    public function statusApproval($id)
    {
        $menu = Menu::find($id);
        $menu->status = !$menu->status;
        $menu->save();

        return redirect()->back();
    }

    //Show data to  the front end
    public function views(){

        return view('index');
    }
}





