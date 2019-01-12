<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Video extends Model
{
    //
    protected $fillable = [
        'name', 'video', 'show'
    ];
    public $timestamps = false;

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function getVideos()
    {
        return DB::table('videos')
            ->get();
    }

    /**
     * @param $id
     * @return \Illuminate\Support\Collection
     */
    public static function getVideoById($id)
    {
        return DB::table('videos')
            ->where('id', '=', $id)
            ->get();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function updateVideo(Request $request)
    {
        DB::table('videos')
            ->where('id', '=', $request->videoId)
            ->update([
                'name' => $request->name,
                'video' => $request->video,
                'show' => $request->show,
            ]);
        return back();
    }
}
