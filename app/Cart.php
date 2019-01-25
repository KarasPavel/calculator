<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{
    public static function addProduct(Request $request)
    {
        Session::put(Session::getId(), []);
        $result = json_decode($request->data);


        if (Session::has(Session::getId())) {
            Session::push(Session::getId(), $result);
        } else {
            Session::put(Session::getId(), []);
            Session::push(Session::getId(), $result);
        }

//        if (Session::has(Session::getId())) {
//            $value = Session::get(Session::getId());
//            Session::put(Session::getId(), []);
//            if (gettype($value) === 'array'){
//                foreach ($value as $item){
//                    Session::push(Session::getId(), $item);
//                }
//                Session::push(Session::getId(), $result);
//            } else {
//                Session::push(Session::getId(), $value);
//                Session::push(Session::getId(), $result);
//            }
//        } else {
//            Session::put(Session::getId(), []);
//            Session::push(Session::getId(), $result);
//        }
//

        $val = Session::get(Session::getId());
        return $val;
    }
}
