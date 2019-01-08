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
            $video = new Video();
            $video->name = 'видео № ' . $i;
            $video->video = 'https://www.youtube.com/embed/cIyVNoY3_L4';
            $video->show = true;
            $video->save();
        }
    }
}
