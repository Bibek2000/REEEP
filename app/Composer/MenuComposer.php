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
        public function compose(View $view)
    {
        $menus = $this->getMenuItems();
        $view->with('menus', $menus);
    }
        function getMenuItems($parentId = null) {
            $menuItems = Menu::where('status', 1)
                ->where('parent_id', $parentId)
                ->get();

            foreach ($menuItems as $menuItem) {
                $menuItem->children = $this->getMenuItems($menuItem->id);
            }

            return $menuItems;
        }
}

