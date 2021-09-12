<?php

namespace App\Http\Views;

use Illuminate\View\View;
use Cache;

class MenuComposer
{
    public function __construct()
    {

    }

    public function compose(View $view)
    {
        $user = auth()->user();

        $menus = $user->getAllPermissions();
        $parent_menus = $menus->where('type', 'menu')->whereNull('parent_id')->where('state',1)->unique('id');
        $sub_menus = $menus->where('type', 'menu')->whereNotNull('parent_id')->where('state',1);
        $parent_menus = $parent_menus->map(function($parent) use ($sub_menus) {
            $parent->setRelation('sub_menus', $sub_menus->where('parent_id', $parent->id));
            return $parent;
        });
        
        return $view->with('menus', $parent_menus);
    }

}
