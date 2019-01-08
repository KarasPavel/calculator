<?php

use Illuminate\Database\Seeder;
use App\Video;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.video
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i < 12; $i++) {
            $photo = new Video();
            $photo->name = 'видео № ' . $i;
            $photo->video = 'https://www.youtube.com/embed/cIyVNoY3_L4';
            $photo->save();
        }
    }
}
