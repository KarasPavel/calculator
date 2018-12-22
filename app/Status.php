<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Status extends Model
{
    protected $fillable =[
        'status'
    ];
    public $timestamps = false;

    public static function getStatuses(){
        return DB::table('statuses')
            ->get();
    }
}
