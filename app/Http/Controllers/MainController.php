<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MainController extends Controller
{

    public function actionMain()
    {
       $menu = Menu::all();
       $title = 'Home Page';
       return view('main_page',['title' => $title,'menu' => $menu]);
    }

}
