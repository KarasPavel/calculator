<?php

use Illuminate\Database\Seeder;
use App\Specialist;

class SpecialistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create none
        $none = new Specialist();
        $none->specialist = "none";
        $none->save();

        //create designer
        $designer = new Specialist();
        $designer->specialist = "designer";
        $designer->save();

        //create scheduler
        $scheduler = new Specialist();
        $scheduler->specialist = "scheduler";
        $scheduler->save();
    }
}
