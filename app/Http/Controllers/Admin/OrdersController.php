<?php
/**
 * Created by PhpStorm.
 * User: vlastit
 * Date: 18.12.18
 * Time: 12:28
 */

namespace App\Http\Controllers\Admin;
use App\Role;
use App\User;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

//use App\Role;

class OrdersController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewOrders()
    {
        $user = Auth::user();
        $allOrders = Order::getOrders();
        /*dd($allOrders);*/
        return view('admin/viewOrders', ['user' => $user, 'allOrders' => $allOrders]);
    }
}