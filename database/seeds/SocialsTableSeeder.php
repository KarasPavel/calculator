<?php

use Illuminate\Database\Seeder;
use App\Social;

class SocialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socials = new Social();
        $socials->name ="VK";
        $socials->link ="www.vk.com";
        $socials->save();

        $socials = new Social();
        $socials->name ="Instagram";
        $socials->link ="www.instagram.com";
        $socials->save();
    }
}
