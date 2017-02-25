<?php

use Illuminate\Database\Seeder;

use App\Schedule;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $openschedule_one = new Schedule();
        $openschedule_one->name = 'Pasholly';
        $openschedule_one->title = 'Schedule One';
        $openschedule_one->type = 'Full Time';
        $openschedule_one->start_time ='2017-02-23 02:14:33';
        $openschedule_one->end_time ='2017-02-23 02:14:33';
        $openschedule_one->save();

        $openschedule_two = new Schedule();
		$openschedule_two->name = 'Anthony';
        $openschedule_two->title = 'Schedule Two';
        $openschedule_two->type = 'Full Time';
        $openschedule_two->start_time ='2017-02-23 02:14:33';
        $openschedule_two->end_time ='2017-02-23 02:14:33';
        $openschedule_two->save();

        $openschedule_three = new Schedule();
        $openschedule_three->name = 'Sarah';
        $openschedule_three->title = 'Schedule Three';
        $openschedule_three->type = 'Full Time';
        $openschedule_three->start_time ='2017-02-23 02:14:33';
        $openschedule_three->end_time ='2017-02-23 02:14:33';
        $openschedule_three->save();
    }
}
