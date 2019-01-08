<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Specialist extends Model
{
    //
    protected $fillable = [
        'specialist'
    ];
    public $timestamps = false;

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function getSpecialists()
    {
        return DB::table('specialists')
            ->get();
    }
}
