<?php

namespace App\Http\Controllers\Admin;

use App\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    public function createCart(Request $request){
        $asd = Cart::addProduct($request);
//        dd($asd);
        return $asd;
    }
}
