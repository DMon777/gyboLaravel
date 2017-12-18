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

        $schedules = $this->getSchedules();

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

    public function actionAdminTimeTable ()
    {
        $schedules = $this->getSchedules();
        $classes = Classes::all();

        return view('admin.pages.schedules',['schedules' => $schedules,'classes' => $classes]);
    }

    public function updateAdminTimeTable (Request $request)
    {
        $day = $request->day;


        $schedules = Schedule::where('day','=',$day)->orderBy('order')->get();

        $count = 0;
        foreach ($schedules as $schedule) {

            $schedule->time = $request->time[$count];
            $schedule->order = $request->order[$count];
            $schedule->flag = $request->flag[$count];
            $schedule->class_id = $request->class[$count];
            if(!$schedule->save()) {
                return redirect()->back()->with('message','произошла ошибка!!!');
            }
            $count++;
        }
        return redirect()->back()->with('message','Графики обновлены');
    }

    public function actionAddSchedule ()
    {
        $days = ['SUNDAY','MONDAY','TUESDAY','WEDNESDAY','THURSDAY','FRIDAY','SATURDAY'];
        $classes = Classes::all();

        return view('admin.pages.add_schedule',['days' => $days,'classes' => $classes]);
    }

    public function addSchedule (Request $request)
    {
        $model = new Schedule();
        $model->day = $request->day;
        $model->time = $request->time;
        $model->order = $request->order;
        $model->class_id = $request->class;

        if($model->save()) {
            return redirect()->back()->with('message','График сохранен!');
        } else {
            return redirect()->back()->with('message','при сохранеии произошла ошибка!');
        }

    }


    public function deleteSchedule ($id)
    {
        $model = Schedule::find($id);
        if($model->delete()) {
            return redirect()->back()->with('message','График удален');
        } else {
            return redirect()->back()->with('message'," при удалении произошла ошибка!!!");
        }
    }


    private function getSchedules() {
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

        return $schedules;
    }

}
