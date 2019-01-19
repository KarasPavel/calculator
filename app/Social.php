<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Social extends Model
{
    protected $fillable =[
        'name', 'link'
    ];
    public $timestamps = false;

    public static function getSocials(){
        return DB::table('socials')
            ->get();
    }
    public static function getSocialsById($id){
        return DB::table('socials')
            ->where('id','=',$id)
            ->first();
    }

    public static function updateSocial($request){
        DB::table('socials')
            ->where('id','=',$request->id)
            ->update([
                'link' => $request->social
            ]);
    }
}
