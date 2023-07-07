<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $admin = Auth::user()->get()->all();
        return view('adminProfile.profileView', compact('admin'));
    }
    public function edit(User $user){
        if (!$user) {
            request()->session()->flash('error', "Error:Invalid Request");
            return redirect()->back();
        }
        return view('adminProfile.profileEdit', compact('user'));
    }
    public function update(Request $request, User $admin){
        $adminData = $request->validate([
            'name'=> 'required|string|max:50',
            'email'=> 'required|email|max:100',
        ]);
        $admin->update($adminData);
        return redirect(route('admin.index'))->with('success', "Admin profile updated successfully");
    }
    public function passwordUpdate(Request $request, User $admin){
        $request->validate([
            'old_password'=>["required"],
            'password'=>['required','min:8','confirmed'],
        ]);

        $oldPassword = $request->old_password;

        if (Hash::check($oldPassword, $admin->password)) {

            $admin->update(['password'=>Hash::make($request->password)]);
            return redirect()->back()->with("success", "Password updated successfully");
        } else {
            return redirect()->back()->with('danger',"Old password is incorrect");
        }
    }
}
