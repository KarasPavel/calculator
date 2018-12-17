<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laratrust\LaratrustRole;

class Role extends LaratrustRole
{
    protected $fillable =[
        'name','display_name','description'
    ];

    public static function getRoles(){
        return DB::table('roles')
            ->where('id','!=',2)
            ->get();
    }
    //


}
