<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Trainers;

class TrainersController extends Controller
{

    public function actionTrainers()
    {

        $trainers = Trainers::all();

        $menu = Menu::all();
        $title = 'Our Trainers';
        return view('trainers_page',['title' => $title,'menu' => $menu,'trainers' => $trainers]);
    }

}
