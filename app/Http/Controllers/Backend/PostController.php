<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;

class PostController extends Controller
{
    public function post_order(Request $request)
    {

        $posts = Menu::whereNull('parent_id')->orderBy('order', 'asc')->get();
        return view('backend.menu.post_order', compact('posts'));
    }
    public function post_order_change(Request $request)
    {
        $data = $request->input('order');
        foreach ($data as $index => $id) {
            Menu::where('id', $id)->update(['order' => $index]);
        }
        return  response()->json([

            'message' => 'Post Order changed successfully.',

            'alert-type' => 'success'

        ]);
    }
}
