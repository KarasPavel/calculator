<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class Photo extends Model
{
    protected $fillable = [
        'type', 'photo', 'small_photo'
    ];
    public $timestamps = false;


    public static $onlyname;
    public static $onlyExtension;

    /**
     * @param Request $request
     */
    public static function getName(Request $request)
    {
        if ($request->photo) {
            $fullName = $request->file('photo')->getClientOriginalName();
            $extension = $request->file('photo')->getClientOriginalExtension();
            self::$onlyname = explode('.' . $extension, $fullName);
            self::$onlyExtension = $request->file('photo')->getClientOriginalExtension();
        }
    }

    /**
     * @param Request $request
     */
    public static function getType(Request $request)
    {
        switch ($request->type) {
            case 'лестницы':
                return 'images/Stairs/1/';
            case 'полы':
                return 'images/Stairs/2/';
            case 'бронирование':
                return 'images/Stairs/3/';
            case 'эксклюзив':
                return 'images/Stairs/4/';
            case 'угловые и фигурные':
                return 'images/Showers/1/';
            case 'прямые душевые':
                return 'images/Showers/2/';
            case 'форма трапеции':
                return 'images/Showers/3/';
            case 'двери ниша':
                return 'images/Showers/4/';
            case 'глухие перегородки':
                return 'images/Showers/5/';
            case 'ограждения в ванную':
                return 'images/Showers/6/';
            case 'с раздвижной дверью':
                return 'images/Showers/7/';
            case 'эксклюзив и опт':
                return 'images/Showers/8/';
            case 'зеркала на заказ':
                return 'images/Glasses/1/';
            case 'зеркальное панно':
                return 'images/Glasses/2/';
            case 'оптовые заказы':
                return 'images/Glasses/3/';
            case 'эксклюзив решения':
                return 'images/Glasses/4/';
            case 'распашные двери':
                return 'images/Door/1/';
            case 'перегородки':
                return 'images/Door/2/';
            case 'маятниковые двери':
                return 'images/Door/3/';
            case 'раздвижные двери':
                return 'images/Door/4/';
            case 'ограждения':
                return 'images/Door/5/';
            case 'двери в коробках':
                return 'images/Door/6/';
            case 'эксклюзивные решения':
                return 'images/Door/7/';
            case 'скинали с фотопечатью':
                return 'images/Fartucks/1/';
            case 'одноцветные фартуки':
                return 'images/Fartucks/2/';
            case 'скинали с подсветкой':
                return 'images/Fartucks/3/';
        }
    }

    public static function getSmallPath(Request $request)
    {
        switch ($request->type) {
            case 'лестницы':
                return 'images/Stairs/1/small/';
            case 'полы':
                return 'images/Stairs/2/small/';
            case 'бронирование':
                return 'images/Stairs/3/small/';
            case 'эксклюзив':
                return 'images/Stairs/4/small/';
            case 'угловые и фигурные':
                return 'images/Showers/1/small/';
            case 'прямые душевые':
                return 'images/Showers/2/small/';
            case 'форма трапеции':
                return 'images/Showers/3/small/';
            case 'двери ниша':
                return 'images/Showers/4/small/';
            case 'глухие перегородки':
                return 'images/Showers/5/small/';
            case 'ограждения в ванную':
                return 'images/Showers/6/small/';
            case 'с раздвижной дверью':
                return 'images/Showers/7/small/';
            case 'эксклюзив и опт':
                return 'images/Showers/8/small/';
            case 'зеркала на заказ':
                return 'images/Glasses/1/small/';
            case 'зеркальное панно':
                return 'images/Glasses/2/small/';
            case 'оптовые заказы':
                return 'images/Glasses/3/small/';
            case 'эксклюзив решения':
                return 'images/Glasses/4/small/';
            case 'распашные двери':
                return 'images/Door/1/small/';
            case 'перегородки':
                return 'images/Door/2/small/';
            case 'маятниковые двери':
                return 'images/Door/3/small/';
            case 'раздвижные двери':
                return 'images/Door/4/small/';
            case 'ограждения':
                return 'images/Door/5/small/';
            case 'двери в коробках':
                return 'images/Door/6/small/';
            case 'эксклюзивные решения':
                return 'images/Door/7/small/';
            case 'скинали с фотопечатью':
                return 'images/Fartucks/1/small/';
            case 'одноцветные фартуки':
                return 'images/Fartucks/2/small/';
            case 'скинали с подсветкой':
                return 'images/Fartucks/3/small/';
        }
    }


    /**
     * @param Request $request
     */
    public static function CheckType(Request $request)
    {
        $request->validate([
            'photo' => 'mimes:jpeg,png'
        ]);
    }

    /**
     * @param Request $request
     * @return bool
     */
    public static function uploadPhoto(Request $request,$smallPhoto)
    {
        Photo::getName($request);
        $onlyName = self::$onlyname;
        $onlyName[0] = $onlyName[0] . rand(1, 999999);
        $extension = self::$onlyExtension;
        $path = Photo::getType($request);
        $destinationPath = public_path($path);
        $image = $request->file('photo');
        $image->move($destinationPath, $onlyName[0] . '.' . $extension);
        $photo = $path . $onlyName[0] . "." . $extension;

        $small_path = Photo::getSmallPath($request);
        $destinationPathSmall = public_path($small_path);
        $smallPhoto->resize(250, 148);
        $smallPhoto->save($destinationPathSmall. $onlyName[0] . '.' . $extension);
        $small_photo = $small_path . $onlyName[0] . "." . $extension;
        return DB::table('photos')
            ->insert([
                'name' => $request->name,
                'type' => $request->type,
                'photo' => substr($photo, 1),
                'small_photo' => substr($small_photo, 1)
            ]);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function getTypes()
    {
        return DB::table('photos')
            ->select('type')
            ->distinct()
            ->get();
    }

    /**
     * @param $id
     * @return \Illuminate\Support\Collection
     */
    public static function getPhotoById($id)
    {
        return DB::table('photos')
            ->where('id', '=', $id)
            ->get();
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function getPhotos()
    {
        return DB::table('photos')
            ->paginate(10);
    }


    /**
     * @param $id
     * @return int
     */
    public static function deletePhoto($id)
    {
        return DB::table('photos')
            ->where('id', '=', $id)
            ->delete();
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function getPhotosWithoutPaginate()
    {
        return DB::table('photos')
            ->get();
    }

}
