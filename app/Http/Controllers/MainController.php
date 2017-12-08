<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use App\Trainers;
use App\UpcomingCourcses;
use App\Pacages;

class MainController extends Controller
{

    public function actionMain()
    {
       $title = 'Home Page';

       $classes = Classes::select('id','name','img')->get();
       $trainers = Trainers::select('id','name','specialization','description','img')->get();
       $upcoming_courses = UpcomingCourcses::all();
       $pacages = Pacages::all();
        foreach ($pacages as $pacage) {
            $desc = explode(',',$pacage->description);
            $pacage->description = $desc;
       }

       return view('main_page',
       [
          'title' => $title,
          'classes' => $classes,
          'trainers' => $trainers,
          'upcoming_courses' => $upcoming_courses,
          'pacages' => $pacages,
       ]);
    }

}
