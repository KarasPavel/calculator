<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

//use App\Role;

class AdminController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard()
    {
        $user = Auth::user();
        return view('admin/dashboard', ['user' => $user]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function test()
    {
        $user = Auth::user();
        return view('admin/test', ['user' => $user]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createUser()
    {
        $user = Auth::user();
        $role = Role::getRoles();
        //dd($role);
        return view('admin/createUser', ['user' => $user, 'role' => $role]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewUsers()
    {

        $user = Auth::user();
        $allUsers = User::getUsers();
        //dd($allUsers);
        return view('admin/viewUsers', ['user' => $user, 'allUsers' => $allUsers]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createAccount(Request $request)
    {
//        dd($request);

     $request->validate([
         'name' => 'required|string|min:5|max:100',
         'email' => 'required|email|unique:users',
         'password' => ['required',
             'min:6',],
         'rePassword' => 'required|same:password',
     ]);
        User::createAccount($request);
        return redirect()->route('viewUsers');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editUser($id){
       $user = Auth::user();
       $userData = User::getUserById($id);
       $role = Role::getRoles();
        return view('admin/editUser', ['userData' => $userData, 'role' => $role,'user'=>$user]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateAccount(Request $request){
        User::updateAccount($request);
        return redirect()->route('viewUsers');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteUser($id){
        User::deleteAccount($id);
        return redirect()->route('viewUsers');
    }

}