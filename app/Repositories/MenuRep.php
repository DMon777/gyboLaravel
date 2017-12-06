<?php
/**
 * Created by PhpStorm.
 * User: Димон
 * Date: 06.12.2017
 * Time: 14:05
 */

namespace App\Repositories;
use App\Menu;

class MenuRep
{
    public function getMenu()
    {
        $menu = Menu::all();
        $header_menu = view('frontend.main_menu',['menu' => $menu])->render();
        echo $header_menu;
    }
}