<?php

use Illuminate\Database\Seeder;

class TrainersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('trainers')->insert([

            [
                'name' => 'MUHIBBUR RASHID',
                'phone' => '+49 123 456 789',
                'email' => 'erange@email.com',
                'specialization' => 'Female body trainer',
                'description' => 'Etiam dignissim sit amet felis ac sagittis. Sed libero arcu, pharetra et ante opos pil, elementum scelerisque arcu. Curabitur sagittis non justo at ultricies odio ac.',
                'img' => 'team-2.jpg'
            ],
            [
                'name' => 'MARISA GOLDBERG',
                'phone' => '+49 123 456 789',
                'email' => 'erange@email.com',
                'specialization' => 'Female body trainer',
                'description' => 'Etiam dignissim sit amet felis ac sagittis. Sed libero arcu, pharetra et ante opos pil, elementum scelerisque arcu. Curabitur sagittis non justo at ultricies odio ac.',
                'img' => 'team-1.jpg'
            ],
            [
                'name' => 'MURGLIN STILLER',
                'phone' => '+49 123 456 789',
                'email' => 'erange@email.com',
                'specialization' => 'Female body trainer',
                'description' => 'Etiam dignissim sit amet felis ac sagittis. Sed libero arcu, pharetra et ante opos pil, elementum scelerisque arcu. Curabitur sagittis non justo at ultricies odio ac.',
                'img' => 'team-3.jpg'
            ],
            [
                'name' => 'MURGLIN VANESSA',
                'phone' => '+49 123 456 789',
                'email' => 'erange@email.com',
                'specialization' => 'Female body trainer',
                'description' => 'Etiam dignissim sit amet felis ac sagittis. Sed libero arcu, pharetra et ante opos pil, elementum scelerisque arcu. Curabitur sagittis non justo at ultricies odio ac.',
                'img' => 'team-4.jpg'
            ],

        ]);

    }
}
