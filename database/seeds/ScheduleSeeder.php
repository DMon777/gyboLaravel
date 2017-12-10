<?php

use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedule')->insert([

            [
                'time' => '7-10',
                'day' => 'Sunday',
                'class_id' => 3,
                'order' => 1
            ],
            [
                'time' => '10-13',
                'day' => 'Sunday',
                'class_id' => 5,
                'order' => 2
            ],
            [
                'time' => '13-16',
                'day' => 'Sunday',
                'class_id' => 4,
                'order' => 3
            ],
            [
                'time' => '16-19',
                'day' => 'Sunday',
                'class_id' => 2,
                'order' => 4
            ],
            [
                'time' => '19-22',
                'day' => 'Sunday',
                'class_id' => 6,
                'order' => 5
            ],
//            end sunday
            [
                'time' => '7-10',
                'day' => 'Monday',
                'class_id' => 1,
                'order' => 1
            ],
            [
                'time' => '10-13',
                'day' => 'Monday',
                'class_id' => 3,
                'order' => 2
            ],
            [
                'time' => '13-16',
                'day' => 'Monday',
                'class_id' => 2,
                'order' => 3
            ],
            [
                'time' => '16-19',
                'day' => 'Monday',
                'class_id' => 6,
                'order' => 4
            ],
            [
                'time' => '19-22',
                'day' => 'Monday',
                'class_id' => 4,
                'order' => 5
            ],
//            end monday
            [
                'time' => '7-10',
                'day' => 'TUESDAY',
                'class_id' => 3,
                'order' => 1
            ],
            [
                'time' => '10-13',
                'day' => 'TUESDAY',
                'class_id' => 5,
                'order' => 2
            ],
            [
                'time' => '13-16',
                'day' => 'TUESDAY',
                'class_id' => 5,
                'order' => 3
            ],
            [
                'time' => '16-19',
                'day' => 'TUESDAY',
                'class_id' => 2,
                'order' => 4
            ],
            [
                'time' => '19-22',
                'day' => 'TUESDAY',
                'class_id' => 1,
                'order' => 5
            ],
//            end TUESDAY
            [
                'time' => '7-10',
                'day' => 'WEDNESDAY',
                'class_id' => 5,
                'order' => 1
            ],
            [
                'time' => '10-13',
                'day' => 'WEDNESDAY',
                'class_id' => 1,
                'order' => 2
            ],
            [
                'time' => '13-16',
                'day' => 'WEDNESDAY',
                'class_id' => 4,
                'order' => 3
            ],
            [
                'time' => '16-19',
                'day' => 'WEDNESDAY',
                'class_id' => 2,
                'order' => 4
            ],
            [
                'time' => '19-22',
                'day' => 'WEDNESDAY',
                'class_id' => 3,
                'order' => 5
            ],
//            end WEDNESDAY
            [
                'time' => '7-10',
                'day' => 'THURSDAY',
                'class_id' => 5,
                'order' => 1
            ],
            [
                'time' => '10-13',
                'day' => 'THURSDAY',
                'class_id' => 3,
                'order' => 2
            ],
            [
                'time' => '13-16',
                'day' => 'THURSDAY',
                'class_id' => 1,
                'order' => 3
            ],
            [
                'time' => '16-19',
                'day' => 'THURSDAY',
                'class_id' => 2,
                'order' => 4
            ],
            [
                'time' => '19-22',
                'day' => 'THURSDAY',
                'class_id' => 6,
                'order' => 5
            ],
//            end THURSDAY
            [
                'time' => '7-10',
                'day' => 'FRIDAY',
                'class_id' => 6,
                'order' => 1
            ],
            [
                'time' => '10-13',
                'day' => 'FRIDAY',
                'class_id' => 2,
                'order' => 2
            ],
            [
                'time' => '13-16',
                'day' => 'FRIDAY',
                'class_id' => 4,
                'order' => 3
            ],
            [
                'time' => '16-19',
                'day' => 'FRIDAY',
                'class_id' => 3,
                'order' => 4
            ],
            [
                'time' => '19-22',
                'day' => 'FRIDAY',
                'class_id' => 5,
                'order' => 5
            ],
//            end FRIDAY
            [
                'time' => '7-10',
                'day' => 'SATURDAY',
                'class_id' => 3,
                'order' => 1
            ],
            [
                'time' => '10-13',
                'day' => 'SATURDAY',
                'class_id' => 5,
                'order' => 2
            ],
            [
                'time' => '13-16',
                'day' => 'SATURDAY',
                'class_id' => 4,
                'order' => 3
            ],
            [
                'time' => '16-19',
                'day' => 'SATURDAY',
                'class_id' => 6,
                'order' => 4
            ],
            [
                'time' => '19-22',
                'day' => 'SATURDAY',
                'class_id' => 1,
                'order' => 5
            ],
//            end SATURDAY
        ]);
    }
}
