<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Text extends Model
{
    protected $fillable = [
        'name', 'block','title'
    ];
    public $timestamps = false;

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function getAdvantagesTexts(){
        return DB::table('texts')
            ->where('block','=','НАШИ ПРЕЕМУЩЕСТВА')
            ->get();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public static function updateAdvantagesTexts(Request $request){
        DB::table('texts')
            ->where('id','=',$request->id)
            ->update([
                'name' => $request->name
            ]);
        return back();
    }

    public static function getTextsById($id){

    }

}
