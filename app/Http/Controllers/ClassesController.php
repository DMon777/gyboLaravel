<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;

class ClassesController extends Controller
{

    public function actionClasses()
    {
       $title = "Our Classes";

       $classes = Classes::get();

       return view('classes_page',['title' => $title,'classes' => $classes]);
    }


    public function actionClass($id)
    {

        $class = Classes::find($id);
        $title = $class->name;

        return view('class_detail_page',['title' => $title,'class' => $class]);
    }

}
