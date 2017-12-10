<?php

namespace App\Http\Controllers;

use App\Classes;
use Illuminate\Http\Request;
use App\Schedule;

class TimeTableController extends Controller
{

    /*
    Для создания этой штуковины планирую сделать так:
    создать таблицу schedules в которой будут поля id,time,day,class_id и flag для того чтобы закры
    вать какой либо класс . Таблица будет связана с таблицей classes один ко многим , так как у одного
    графика может быть много классов.
    Выборку буду делать по дням недели order by time.
    Как то так, ну в общем еще нужно будет подумать
    id 1
    time 9.00
    day sunday
    class_id 3
    flag 1

    */
    public function actionTimeTable()
    {
        $title = 'Time Table';
        $schedules = [];

        $sunday_schedule = Schedule::where('day','=','SUNDAY')
            ->orderBy('order')->get();
        $schedules['SUNDAY'] = $sunday_schedule;

        $monday_schedule = Schedule::where('day','=','MONDAY')
            ->orderBy('order')->get();
        $schedules['MONDAY'] = $monday_schedule;

        $tuesday_schedule = Schedule::where('day','=','TUESDAY')
            ->orderBy('order')->get();
        $schedules['TUESDAY'] = $tuesday_schedule;

        $wednesday_schedule = Schedule::where('day','=','WEDNESDAY')
            ->orderBy('order')->get();
        $schedules['WEDNESDAY'] = $wednesday_schedule;

        $thursday_schedule = Schedule::where('day','=','THURSDAY')
            ->orderBy('order')->get();
        $schedules['THURSDAY'] = $thursday_schedule;

        $friday_schedule = Schedule::where('day','=','FRIDAY')
            ->orderBy('order')->get();
        $schedules['FRIDAY'] = $friday_schedule;

        $saturday_schedule = Schedule::where('day','=','SATURDAY')
            ->orderBy('order')->get();
        $schedules['SATURDAY'] = $saturday_schedule;


//        foreach ($tuesday_schedule as $item) {
//            echo $item->time.'<br>';
//            $class = $item->classes;
//            echo $class->name.'<br>';
//            echo $class->img;
//            echo "<hr>";
//        }

        return view('timetable_page',['title' => $title,
            'schedules' => $schedules
            ]);
    }


}
