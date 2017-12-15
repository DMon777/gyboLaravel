<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes;
use App\Trainers;
use App\UpcomingCourcses;
use App\Pacages;
use App\Articles;

use PHPMailer;

class MainController extends Controller
{

    public function actionMain()
    {
       $title = 'Home Page';

       $classes = Classes::select('id','name','img')->get();
       $trainers = Trainers::select('id','name','specialization','description','img')->get();
       $upcoming_courses = UpcomingCourcses::all();
       $pacages = Pacages::all();
        $recent_posts = Articles::orderBy('date','desc')->limit(3)->get();
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
           'recent_posts' => $recent_posts
       ]);
    }

    public function sendMail(Request $request)
    {
        $data = $request->all();
        $admin_email = 'd.mon110kg@gmail.com';

        $mail = new PHPMailer();
        $mail->CharSet = 'utf-8';
        $mail->setFrom($data['email'], $data['name']);
        $mail->addAddress($admin_email, 'Dima Bessalov');
        $mail->addReplyTo($data['email'], 'Information');

        $mail->isHTML(true);

        $mail->Subject = 'Тема моего письма';
        $mail->Body    = view('layouts.email',['message' => $data['message']])->render();
        $mail->AltBody = $data['message']; // альтернативное тело письма без html тегов, на всякий случай.


        if($mail->send()) {
            return redirect(route('home'))->with('email_status','письмо было отправлено!');
        } else {
            return redirect(route('home'))->with('email_status','ошибка при отправлении письма!');
        }

    }

}
