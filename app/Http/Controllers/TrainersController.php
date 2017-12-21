<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Http\Requests\TrainersValidator;
use Illuminate\Http\Request;
use App\Trainers;
use PHPMailer;
use App\Roles;
use Gate;

class TrainersController extends Controller
{

    public function actionTrainers()
    {
        //$trainers = Trainers::all();

        $role = Roles::where('name','=','Trainer')->first();
        $trainers = $role->trainers;


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

    public function sendMailToTrainer(Request $request,$id)
    {
        $data = $request->all();
        $admin_email = 'd.mon110kg@gmail.com';

        $mail = new PHPMailer();
        $mail->CharSet = 'utf-8';
        $mail->setFrom($data['email'], $data['name']);
        $mail->addAddress($admin_email, 'Dima Bessalov');
        $mail->addReplyTo($data['email'], $data['name']);

        $mail->isHTML(true);

        $mail->Subject = 'Запись на тренировку';
        $mail->Body    = view('layouts.trainer_email',['data' => $data])->render();
        $mail->AltBody = $data['message']; // альтернативное тело письма без html тегов, на всякий случай.


        if($mail->send()) {
            return redirect(route('trainer',['id' => $id]))->with('email_status','письмо было отправлено!');
        } else {
            return redirect(route('trainer',['id' => $id]))->with('email_status','ошибка при отправлении письма!');
        }
    }

    public function actionAdminTrainers()
    {
        $trainers = Trainers::all();
        return view('admin.pages.trainers',['trainers' => $trainers]);
    }

    public function viewUpdateTrainer($id)
    {

        if(Gate::denies('update-trainer',$id)){
            return redirect()->back()->with('message','Вы не можете редактировать других пользователей!');
        }

        $trainer = Trainers::find($id);
        $all_classes = Classes::all();
        $classes = $trainer->classes;


        return view('admin.pages.update_trainer',
            [
                'trainer' => $trainer,
                'all_classes' => $all_classes,
                'classes' => $classes,
            ]);
    }

    public function updateTrainer(TrainersValidator $request,$id)
    {

        $model = Trainers::find($id);

        $model->name = $request->name;
        $model->description = $request->description;
        $model->specialization = $request->specialization;
        $model->phone = $request->phone;
        $model->email = $request->email;


        if($request->hasFile('img')) {
            $file = $request->file('img');

            $img_name = $file->getClientOriginalName();

            $file->move(public_path().'/assets/images/team/',$img_name);
            $model->img = $img_name;
        } else {
            $model->img = $request->old_img;
        }

        $model->classes()->detach($model->classes);
        $model->classes()->attach($request->classes);

        if($model->save()) {
            return redirect()->back()->with('message','данные обновлены!');
        } else {
            return redirect()->back()->with('message','при обновлении произошла ошибка!');
        }
    }

    public function actionAddTrainer()
    {
        $all_classes = Classes::all();
        $roles = Roles::all();

        return view('admin.pages.add_trainer',['all_classes' => $all_classes,'roles' => $roles]);
    }

    public function addTrainer(TrainersValidator $request)
    {
        $model = new Trainers();

        $model->name = $request->name;
        $model->description = $request->description;
        $model->specialization = $request->specialization;
        $model->phone = $request->phone;
        $model->email = $request->email;
        $model->password = bcrypt($request->password);

        if($request->hasFile('img')) {
            $file = $request->file('img');
          //  $size = $file->getSize();
                $img_name = $file->getClientOriginalName();
                $file->move(public_path().'/assets/images/team/',$img_name);
                $model->img = $img_name;
        }

        if($model->save()) {
            $model->classes()->attach($request->classes);
            $model->roles()->attach($request->roles);
            return redirect()->back()->with('message','данные добавлены!');
        } else {
            return redirect()->back()->with('message','при добавлении произошла ошибка!');
        }

    }

    public function deleteTrainer ($id) {

        if(Gate::denies('delete-trainer')){
            return redirect()->back()->with('message','У вас недостаточно прав для удаления тренеров');
        }

        $model = Trainers::find($id);
        $trainer_name = $model->name;
        $model->classes()->detach($model->classes);
        $model->roles()->detach($model->roles);
        if($model->delete()){
            return redirect()->back()->with('message','Тренер '. $trainer_name .' был удален!!!');
        }

    }


}
