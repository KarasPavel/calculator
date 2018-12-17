<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
//use App\Role;

class AdminController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard()
    {
        $user = Auth::user();
        return view('admin/dashboard',['user' => $user]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function test()
    {
        $user = Auth::user();
        return view('admin/test',['user' => $user]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createUser()
    {
        $user = Auth::user();
        $role = Role::getRoles();
        //dd($role);
        return view('admin/createUser',['user' => $user,'role'=>$role]);
    }


    public function viewUsers(){

        $user = Auth::user();
        $allUsers= User::getUsers();
        //dd($allUsers);
        return view('admin/viewUsers',['user'=>$user,'allUsers'=>$allUsers]);
    }




}