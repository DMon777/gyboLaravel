<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([


            [
                'name' => 'Упражнения',
                'order' => 1,
            ],
            [
                'name' => 'Диета',
                'order' => 2,
            ],
            [
                'name' => 'Тренировки',
                'order' => 3,
            ],


        ]);
    }
}
