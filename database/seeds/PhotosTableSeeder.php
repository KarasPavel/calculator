<?php

use Illuminate\Database\Seeder;
use App\Photo;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create test
//                $photo = new Photo();
//                $photo->type = "AddType";
//                $photo->photo = "images/AddImage.jpg";
//                $photo->save();
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'лестницы';
//        $photo->photo = 'images/Stairs/1/1.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'лестницы';
//        $photo->photo = 'images/Stairs/1/2.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'лестницы';
//        $photo->photo = 'images/Stairs/1/5.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'лестницы';
//        $photo->photo = 'images/Stairs/1/6.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'лестницы';
//        $photo->photo = 'images/Stairs/1/7.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'лестницы';
//        $photo->photo = 'images/Stairs/1/8.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'лестницы';
//        $photo->photo = 'images/Stairs/1/9.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'лестницы';
//        $photo->photo = 'images/Stairs/1/10.jpg';
//        $photo->save();
//
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'полы';
//            $photo->photo = 'images/Stairs/2/' . $i . '.jpg';
//            $photo->save();
//        }
//
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'бронирование';
//            $photo->photo = 'images/Stairs/3/' . $i . '.jpg';
//            $photo->save();
//        }
//
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'эксклюзив';
//            $photo->photo = 'images/Stairs/4/' . $i . '.jpg';
//            $photo->save();
//        }
//
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'угловые и фигурные';
//            $photo->photo = 'images/Showers/1/' . $i . '.jpg';
//            $photo->save();
//        }
//
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'прямые душевые';
//            $photo->photo = 'images/Showers/2/' . $i . '.jpg';
//            $photo->save();
//        }
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'форма трапеции';
//        $photo->photo = 'images/Showers/3/1.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'форма трапеции';
//        $photo->photo = 'images/Showers/3/2.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'форма трапеции';
//        $photo->photo = 'images/Showers/3/4.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'форма трапеции';
//        $photo->photo = 'images/Showers/3/6.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'двери ниша';
//        $photo->photo = 'images/Showers/4/1.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'двери ниша';
//        $photo->photo = 'images/Showers/4/2.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'двери ниша';
//        $photo->photo = 'images/Showers/4/7.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'двери ниша';
//        $photo->photo = 'images/Showers/4/8.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'двери ниша';
//        $photo->photo = 'images/Showers/4/9.jpg';
//        $photo->save();
//
//        $photo = new Photo();
//        $photo->name = 'Example';
//        $photo->type = 'двери ниша';
//        $photo->photo = 'images/Showers/4/10.jpg';
//        $photo->save();
//
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'глухие перегородки';
//            $photo->photo = 'images/Showers/5/' . $i . '.jpg';
//            $photo->save();
//        }
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'ограждения в ванную';
//            $photo->photo = 'images/Showers/6/' . $i . '.jpg';
//            $photo->save();
//        }
//        for ($i = 1; $i < 12; $i++) {
//            if ($i === 6) {
//                continue;
//            }
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'с раздвижной дверью';
//            $photo->photo = 'images/Showers/7/' . $i . '.jpg';
//            $photo->save();
//        }
//
//        for ($i = 1; $i < 12; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'эксклюзив и опт';
//            $photo->photo = 'images/Showers/8/' . $i . '.jpg';
//            $photo->save();
//        }
//
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'зеркала на заказ';
//            $photo->photo = 'images/Glasses/1/' . $i . '.jpg';
//            $photo->save();
//        }
//
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'зеркальное панно';
//            $photo->photo = 'images/Glasses/2/' . $i . '.jpg';
//            $photo->save();
//        }
//
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'оптовые заказы';
//            $photo->photo = 'images/Glasses/3/' . $i . '.jpg';
//            $photo->save();
//        }
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'эксклюзив решения';
//            $photo->photo = 'images/Glasses/4/' . $i . '.jpg';
//            $photo->save();
//        }
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'распашные двери';
//            $photo->photo = 'images/Door/1/' . $i . '.jpg';
//            $photo->save();
//        }
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'перегородки';
//            $photo->photo = 'images/Door/2/' . $i . '.jpg';
//            $photo->save();
//        }
//        for ($i = 1; $i < 11; $i++) {
//            if ($i === 2) {
//                continue;
//            }
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'маятниковые двери';
//            $photo->photo = 'images/Door/3/' . $i . '.jpg';
//            $photo->save();
//        }
//        for ($i = 1; $i < 11; $i++) {
//            if ($i === 4 || $i === 5) {
//                continue;
//            }
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'раздвижные двери';
//            $photo->photo = 'images/Door/4/' . $i . '.jpg';
//            $photo->save();
//        }
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'ограждения';
//            $photo->photo = 'images/Door/5/' . $i . '.jpg';
//            $photo->save();
//        }
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'двери в коробках';
//            $photo->photo = 'images/Door/6/' . $i . '.jpg';
//            $photo->save();
//        }
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'эксклюзивные решения';
//            $photo->photo = 'images/Door/7/' . $i . '.jpg';
//            $photo->save();
//        }
//        for ($i = 1; $i < 16; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'скинали с фотопечатью';
//            $photo->photo = 'images/Fartucks/1/' . $i . '.jpg';
//            $photo->save();
//        }
//
//        for ($i = 1; $i < 11; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'одноцветные фартуки';
//            $photo->photo = 'images/Fartucks/2/' . $i . '.jpg';
//            $photo->save();
//        }
//
//        for ($i = 1; $i < 16; $i++) {
//            $photo = new Photo();
//            $photo->name = 'Example';
//            $photo->type = 'скинали с подсветкой';
//            $photo->photo = 'images/Fartucks/3/' . $i . '.jpg';
//            $photo->save();
//        }

//        $photo = new Photo();
//        $photo->name ='Example';
//        $photo->type ='пол';
//        $photo->photo ='images/Stairs/1/10.jpg';
//        $photo->save();
    }
}
