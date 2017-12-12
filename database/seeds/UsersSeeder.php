<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'name' => 'Dima',
            'email' => 'bessalov88@mail.ru',
            'password' => 'password',
        ]
        ]);
    }
}
