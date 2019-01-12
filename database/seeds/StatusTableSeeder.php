<?php

use Illuminate\Database\Seeder;
use App\Status;
class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create status progress
        $progress = new Status();
        $progress->status = "в рассмотрении";
        $progress->save();

        //create status inProgress
        $inProgress = new Status();
        $inProgress->status = "в процессе";
        $inProgress->save();

        //create status finished
        $finished = new Status();
        $finished->status = "завершен";
        $finished->save();

        //create status canceled
        $canceled = new Status();
        $canceled->status = "отменен";
        $canceled->save();

    }
}
