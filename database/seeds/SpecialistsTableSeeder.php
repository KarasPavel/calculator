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
        $consultant = new Specialist();
        $consultant->specialist = "Консультант";
        $consultant->save();

        //create scheduler
        $gager = new Specialist();
        $gager->specialist = "Замерщик";
        $gager->save();

        //create designer
        $designer = new Specialist();
        $designer->specialist = "Дизайнер";
        $designer->save();
    }
}
