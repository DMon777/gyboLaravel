<?php

use Illuminate\Database\Seeder;

class TrainersClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainers_classes')->insert([

            [
                'trainer_id' => 1,
                'class_id' => 3
            ],
            [
                'trainer_id' => 4,
                'class_id' => 3
            ],
            [
                'trainer_id' => 2,
                'class_id' => 5
            ],
            [
                'trainer_id' => 3,
                'class_id' => 2
            ],
            [
                'trainer_id' => 4,
                'class_id' => 1
            ],
            [
                'trainer_id' => 4,
                'class_id' => 6
            ],
            [
                'trainer_id' => 3,
                'class_id' => 5
            ],
            [
                'trainer_id' => 1,
                'class_id' => 4
            ],

        ]);

    }
}
