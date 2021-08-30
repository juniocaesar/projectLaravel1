<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class C_AdminUnit extends Controller {

    public function displayView(){
        Event::listen(BuildingMenu::class, function(BuildingMenu $event)
        {
            $menu = [
                [
                    'text'        => 'Dasbor Admin Unit',
                    'url'         => 'admin/pages',
                    'icon'        => 'fa fa-home',
                ],
                [
                    'text'        => 'Daftar Mesin',
                    'url'         => 'admin/pages',
                    'icon'        => 'fa fa-table',
                ],
                [
                    'text'        => 'Tentang',
                    'url'         => 'admin/pages',
                    'icon'        => 'fa fa-question-circle',
                ],
            ];
            foreach($menu as $menuItems) {
                $event->menu->add($menuItems);
            }
        }); 
        return view('admin_unit/V_Dashboard_Admin_Unit');
    }
}
