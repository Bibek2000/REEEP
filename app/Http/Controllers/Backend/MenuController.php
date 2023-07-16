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
        $menus = Menu::with('children')->whereNull('parent_id')->orderBy('order')->get()->all();
        return view('backend.menu.index', compact('menus'));

    }

    /**
     * Show the form for creating a new resource.
//     */
    public function create()
    {
        $menus = Menu::with('children')->whereNull('parent_id')->get();
        return view('backend.menu.create', compact('menus'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|unique:menus,name',
           'slug' => 'required',
           'order' => 'required|integer',
            'status' => 'required|boolean'
        ]);
        $menu = new Menu();
        $menu->name = $request['name'];
        $menu->slug = $request['slug'];
        $menu->parent_id = $request['menu'];
        $menu->order = $request['order'];
        $menu->status = $request['status'];
        // Add any other necessary fields
        $menu->save();
        if($menu){
            return redirect(route('menus.index'))->with('success', "Menu Created successfully");
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        $menus = Menu::where('parent_id', $menu->id)->with('children')->orderBy('order')->get()->all();
        return view('backend.menu.index', compact('menus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        $menus = Menu::with('children')->whereNull('parent_id')->get();
        if (!$menus) {
            request()->session()->flash('error', "Error:Invalid Request");
            return redirect()->back();
        }
        return view('backend.menu.edit', compact('menu','menus' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'order' => 'required|integer',
            'status' => 'required|boolean'
        ]);
        $menu->name = $request['name'];
        $menu->slug = $request['slug'];
        $menu->parent_id = $request['menu'];
        $menu->order = $request['order'];
        $menu->status = $request['status'];
        // Add any other necessary fields
        $menu->save();
        if($menu){
            return redirect(route('menus.index'))->with('success', "Menu Created successfully");
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu_child = Menu::with('children')->where('parent_id',$menu->id)->get();
        foreach ($menu_child as $menus){
            $menus->update(
                ['parent_id' => $menu->parent_id]
            );
        }
        $menu->delete();
        return redirect()->back();
    }

//    Status approval for menu
    public function statusApproval($id)
    {
        $menu = Menu::find($id);
        $menu->status = !$menu->status;
        $menu->save();

        return redirect()->back();
    }
}





