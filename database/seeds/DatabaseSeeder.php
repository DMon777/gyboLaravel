<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(TrainersSeeder::class);
        $this->call(ClassesSeeder::class);
        $this->call(PacagesSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(TrainersClassesSeeder::class);
        $this->call(UpcomingCoursesSeeder::class);
        $this->call(ScheduleSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ArticlesSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ClassesSeeder::class);
    }
}
