<?php

use Illuminate\Database\Seeder;
use App\Day;

class DaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create monday
        $monday = new Day();
        $monday->day = "monday";
        $monday->save();

        //create tuesday
        $tuesday = new Day();
        $tuesday->day = 'tuesday';
        $tuesday->save();

        //create wednesday
        $wednesday = new Day();
        $wednesday->day = 'wednesday';
        $wednesday->save();
        //create thursday
        $thursday = new Day();
        $thursday->day = 'thursday';
        $thursday->save();

        //create friday
        $friday = new Day();
        $friday->day = 'friday';
        $friday->save();

        //create saturday
        $saturday = new Day();
        $saturday->day = 'saturday';
        $saturday->save();

        //create sunday
        $sunday = new Day();
        $sunday->day = 'sunday';
        $sunday->save();

        //create any day
        $any_day = new Day();
        $any_day->day = 'any day';
        $any_day->save();
    }
}
