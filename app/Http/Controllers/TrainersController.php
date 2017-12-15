<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainers;
use PHPMailer;

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

}
