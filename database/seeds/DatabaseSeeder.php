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
    }
}
