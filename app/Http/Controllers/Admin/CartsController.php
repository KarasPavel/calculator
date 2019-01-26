<?php

namespace App\Http\Controllers\Admin;

use App\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    public function createCart(Request $request){
        $addProduct = Cart::addProduct($request);
        return $addProduct;
    }

    public function deleteProductFromCart($id)
    {
        $deleteProduct = Cart::deleteProduct($id);
        return $deleteProduct;
    }
}
