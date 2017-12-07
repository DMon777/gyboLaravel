<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("menu")->insert(
            [
                [
                    'name' => 'home',
                    'url' => '',
                    'order' => 1
                ],
                [
                    'name' => 'classes',
                    'url' => 'classes',
                    'order' => 2
                ],
                [
                    'name' => 'timetable',
                    'url' => 'timetable',
                    'order' => 3
                ],
                [
                    'name' => 'trainers',
                    'url' => 'trainers',
                    'order' => 4
                ],
                [
                    'name' => 'blog',
                    'url' => 'blog',
                    'order' => 5
                ],
                [
                    'name' => 'contact',
                    'url' => 'contact',
                    'order' => 6
                ],
            ]
        );

    }
}
