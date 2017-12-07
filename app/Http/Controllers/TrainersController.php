<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainers;

class TrainersController extends Controller
{

    public function actionTrainers()
    {
        $trainers = Trainers::all();

        $title = 'Our Trainers';
        return view('trainers_page',['title' => $title,'trainers' => $trainers]);
    }

    public function actionTrainer($id)
    {


        $trainer = Trainers::find($id);
        $title = $trainer->name;

        return view('trainer_detail_page',['title' => $title,'trainer' => $trainer]);

    }

}
