<?php

use Illuminate\Database\Seeder;
use App\Text;

class TextsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 5; $i++) {
            $text = new Text();
            $text->block = 'НАШИ ПРЕЕМУЩЕСТВА';
            $text->name = 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что 
        тот обеспечивает более или менее стандартное заполнение шаблона';
            $text->save();
        }

        for ($i = 0; $i < 5; $i++) {
            $text = new Text();
            $text->block = 'КОМПАНИИ';
            $text->title = 'НАЗВАНИЕ КОМПАНИИ';
            $text->name = 's';
            $text->save();
        }

    }
}
