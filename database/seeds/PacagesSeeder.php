<?php

use Illuminate\Database\Seeder;

class PacagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacages')->insert([

            [
                'name' => 'STANDARD',
                'img' => 'pricing-1.jpg',
                'description' => '6 DAYS A WEEK,
                    DEDICATED TRAINER ALOCATED,
                    DIET PLAN INCLUDED,
                    DEDICATED TRAINER ALOCATED,
                    MORNING & EVENING BATCHES,
                    FREE CONSULTATION',
                'price' => 28,

            ],
            [
                'name' => 'STANDARD',
                'img' => 'pricing-2.jpg',
                'description' => '6 DAYS A WEEK,
                    DEDICATED TRAINER ALOCATED,
                    DIET PLAN INCLUDED,
                    DEDICATED TRAINER ALOCATED,
                    MORNING & EVENING BATCHES,
                    FREE CONSULTATION',
                'price' => 28,

            ],
            [
                'name' => 'STANDARD',
                'img' => 'pricing-3.jpg',
                'description' => '6 DAYS A WEEK,
                    DEDICATED TRAINER ALOCATED,
                    DIET PLAN INCLUDED,
                    DEDICATED TRAINER ALOCATED,
                    MORNING & EVENING BATCHES,
                    FREE CONSULTATION',
                'price' => 28,

            ],


        ]);
    }
}
