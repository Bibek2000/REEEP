<?php

namespace App\Composer;

use App\Models\Menu;
use App\Repositories\UserRepository;
use Illuminate\View\View;

class MenuComposer
{
    /**
     * Create a new profile composer.
     */


    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $menus = Menu::whereNull('parent_id')->where('status', 1)->get()->all();
        $submenus = Menu::whereNotNull('parent_id')->where('status', 1)->get()->all();
        $view->with('menus', $menus)
        ->with('submenus', $submenus);
    }
}
