<?php

namespace App\Http\Controllers;

use App\Http\Requests\classValidator;
use App\Trainers;
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

        $trainers = $class->trainers;
        $schedules = $class->schedules;

        return view('class_detail_page',
            [
                'title' => $title,
                'class' => $class,
                'trainers' => $trainers,
                'schedules' => $schedules
            ]);
    }

    public function adminActionClasses()
    {
        $classes = Classes::get();

        return view('admin.pages.classes',['classes' => $classes]);
    }

    public function viewUpdateClass($id)
    {
       $class = Classes::find($id);

       $trainers = $class->trainers;
       $all_trainers = Trainers::all();

       return view('admin.pages.class',
            [
                'class' => $class,
                'trainers' => $trainers,
                'all_trainers' => $all_trainers,
            ]);
    }

    public function updateClass(classValidator $request,$id)
    {

        $model = Classes::find($id);

        $model->name = $request->name;
        $model->short_description = $request->short_description;
        $model->description = $request->description;

        if($request->hasFile('img')) {
        $file = $request->file('img');

        $img_name = $file->getClientOriginalName();

        $input['images'] = $file->getClientOriginalName();
        $file->move(public_path().'/assets/images/photos/',$img_name);
        $model->img = $img_name;
        } else {
            $model->img = $request->old_img;
        }

        $model->trainers()->detach($model->trainers);
        $model->trainers()->attach($request->trainers);

        if($model->save()) {
            return redirect()->back()->with('message','данные обновлены!');
        } else {
            return redirect()->back()->with('message','при обновлении произошла ошибка!');
        }
    }


    public function viewAddClass()
    {
        $all_trainers = Trainers::all();
        return view('admin.pages.add_class',
            [
                'all_trainers' => $all_trainers
            ]);
    }

    public function addClass(classValidator $request)
    {

        $model = new Classes();

        $model->name = $request->name;
        $model->short_description = $request->short_description;
        $model->description = $request->description;


        if($request->hasFile('img')) {
            $file = $request->file('img');

            $img_name = $file->getClientOriginalName();

            $input['images'] = $file->getClientOriginalName();
            $file->move(public_path().'/assets/images/photos/',$img_name);
            $model->img = $img_name;
        }

        //$model->trainers()->attach($request->trainers);


        if($model->save()) {
            Classes::find($model->id)->trainers()->attach($request->trainers);
            return redirect()->back()->with('message','данные добавлены!');
        } else {
            return redirect()->back()->with('message','при добавлении произошла ошибка!');
        }

    }

    public function deleteClass($id)
    {
        $model = Classes::find($id);
        $class_name = $model->name;
        $model->trainers()->detach($model->trainers);
        if($model->delete()){
            return redirect()->back()->with('message','Класс '. $class_name .' был удален!!!');
        }

    }

}
