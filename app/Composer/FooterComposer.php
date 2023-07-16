<?php

namespace App\Composer;

use App\Models\Backend\Link;
use App\Models\Backend\Phone;
use App\Models\Backend\WorkingArea;
use App\Models\Menu;
use App\Repositories\UserRepository;
use Illuminate\View\View;

class FooterComposer
{
    /**
     * Create a new profile composer.
     */


    /**
     * Bind data to the view.
     */
    public function compose(View $view)
    {
        $data['socialMedia'] = Link::get()->all();
        $data['leafMenus'] = Menu::whereNull('parent_id')
            ->whereDoesntHave('children')->take(5)
            ->get();
        $data['phoneData'] = Phone::first();
        $data['workingArea'] = WorkingArea::get();
        $view->with('data', $data);
    }
}
