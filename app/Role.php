<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Laratrust\LaratrustRole;

class Role extends LaratrustRole
{
    protected $fillable =[
        'name','display_name','description'
    ];

    //


}
