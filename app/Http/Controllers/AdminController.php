<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function action()
    {

        return view('admin.pages.main_page');
    }
}
