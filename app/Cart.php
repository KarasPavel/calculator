<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Cart extends Model
{
    public static function addProduct(Request $request)
    {
//        Session::put(Session::getId(), []);
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

    public static function deleteProduct($id)
    {

        $value = Session::get(Session::getId());
//        unset($value[$id]);
        array_splice($value, $id, 1);
        Session::put(Session::getId(), []);
        foreach ($value as $item) {
            Session::push(Session::getId(), $item);
        }


//        Session::forget(Session::getId());
//        unset(Session::get(Session::getId())[$id]);
//        $val = Session::get(Session::getId());
//        unset($val[$id]);
        return $value;
    }

    public static function getCart()
    {
        $value = Session::get(Session::getId());
        return $value;
    }

    public static function resetCart()
    {
        Session::forget(Session::getId());;
    }
}
