<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeTableController extends Controller
{

    /*
    Для создания этой штуковины планирую сделать так:
    создать таблицу schedules в которой будут поля id,time,day,class_id и flag для того чтобы закры
    вать какой либо класс . Таблица будет связана с таблицей classes один ко многим , так как у одного
    графика может быть много классов.
    Выборку буду делать по дням недели order by time.
    Как то так, ну в общем еще нужно будет подумать
    */
    public function actionTimeTable()
    {
        $title = 'Time Table';
        return view('timetable_page',['title' => $title]);
    }


}
