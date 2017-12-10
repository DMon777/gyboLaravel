<?php

use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([

            [
                'name' => 'Похудение',
                'link' => 'weight_loss',
            ],
            [
                'name' => 'Спина',
                'link' => 'back',
            ],
            [
                'name' => 'застой',
                'link' => 'stagnation',
            ],

            [
                'name' => 'пресс',
                'link' => 'press',
            ],
            [
                'name' => 'Сила',
                'link' => 'power',
            ],
            [
                'name' => 'жим лежа',
                'link' => 'bench_press',
            ],
        ]);
    }
}
