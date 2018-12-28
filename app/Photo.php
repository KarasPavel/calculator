<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'type', 'photo'
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
                return '/images/Stairs/1/';
            case 'полы':
                return '/images/Stairs/2/';
            case 'бронирование':
                return '/images/Stairs/3/';
            case 'эксклюзив':
                return '/images/Stairs/3/';
            case 'угловые и фигурные':
                return '/images/Showers/1/';
            case 'прямые душевые':
                return '/images/Showers/2/';
            case 'форма трапеции':
                return '/images/Showers/3/';
            case 'двери ниша':
                return '/images/Showers/4/';
            case 'глухие перегородки':
                return '/images/Showers/5/';
            case 'ограждения в ванную':
                return '/images/Showers/6/';
            case 'с раздвижной дверью':
                return '/images/Showers/7/';
            case 'эксклюзив и опт':
                return '/images/Showers/8/';
            case 'зеркала на заказ':
                return '/images/Glasses/1/';
            case 'зеркальное панно':
                return '/images/Glasses/2/';
            case 'оптовые заказы':
                return '/images/Glasses/3/';
            case 'эксклюзив решения':
                return '/images/Glasses/4/';
            case 'распашные двери':
                return '/images/Door/1/';
            case 'перегородки':
                return '/images/Door/2/';
            case 'маятниковые двери':
                return '/images/Door/3/';
            case 'раздвижные двери':
                return '/images/Door/4/';
            case 'ограждения':
                return '/images/Door/5/';
            case 'двери в коробках':
                return '/images/Door/6/';
            case 'эксклюзивные решения':
                return '/images/Door/7/';
            case 'скинали с фотопечатью':
                return '/images/Fartucks/1/';
            case 'одноцветные фартуки':
                return '/images/Fartucks/2/';
            case 'скинали с подсветкой':
                return '/images/Fartucks/3/';
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
    public static function uploadPhoto(Request $request)
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
        return DB::table('photos')
            ->insert([
                'name' => $request->name,
                'type' => $request->type,
                'photo' => $photo,
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
    public static function getPhotoById($id){
        return DB::table('photos')
            ->where('id', '=', $id)
            ->get();
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function getPhotos(){
        return DB::table('photos')
            ->paginate(10);
    }


    /**
     * @param $id
     * @return int
     */
    public static function deletePhoto($id){
        return DB::table('photos')
            ->where('id','=',$id)
            ->delete();
    }

    public static function getPhotosWithoutPaginate(){
        return DB::table('photos')
            ->get();
    }

}
