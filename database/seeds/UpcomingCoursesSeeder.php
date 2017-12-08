<?php

use Illuminate\Database\Seeder;

class UpcomingCoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('upcoming_courses')->insert([


            [
                'name' => 'RELAXING YOGA CLASS',
                'price' => 59,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit delectus, adipisci at!',
                'img' => '1.jpg'
            ],
            [
                'name' => 'WEIGHT LOOSE CLASS',
                'price' => 59,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit delectus, adipisci at!',
                'img' => '2.jpg'
            ],

            [
                'name' => 'BODY BUILDING CLASS',
                'price' => 59,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit delectus, adipisci at!',
                'img' => '3.jpg'
            ],



        ]);

    }
}
