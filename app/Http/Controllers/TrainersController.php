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

        $trainer_classes = $trainer->classes;
        /*
         либо так для уточнения выборки
        $trainer_classes = $trainer->classes()->select('classes.id','classes.name')->get();
         но обязательно уточнять таблицу а то из-за повторяющихся имен полей выбрасывает
        ошибку!!!
         */
        
        return view('trainer_detail_page',
            [
                'title' => $title,
                'trainer' => $trainer,
                'trainer_classes' => $trainer_classes
            ]);

    }

}
