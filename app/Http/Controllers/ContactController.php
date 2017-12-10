<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function actionContact()
    {
        $title = 'Contact';

        return view('contact_page',['title' => $title]);
    }
}
