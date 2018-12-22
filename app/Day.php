<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Day extends Model
{
    protected $fillable = [
        'day'
    ];
    public $timestamps = false;

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function getDays()
    {
        return DB::table('days')
            ->get();
    }
}
