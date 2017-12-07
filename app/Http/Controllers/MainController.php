<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use App\Trainers;

class MainController extends Controller
{

    public function actionMain()
    {
       $title = 'Home Page';

       $classes = Classes::select('id','name','img')->get();
       $trainers = Trainers::select('id','name','specialization','description','img')->get();


       return view('main_page',
       [
          'title' => $title,
          'classes' => $classes,
          'trainers' => $trainers
       ]);
    }

}
