<?php

namespace App\Http\Controllers\Admin;

use App\Social;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SocialsController extends Controller
{
    public function viewSocials()
    {
        $user = Auth::user();
        $allSocials = Social::getSocials();
        /*dd($allOrders);*/
        return view('admin/viewSocials', ['user' => $user, 'allSocials' => $allSocials]);
    }

    public function editSocials($id)
    {
        $user = Auth::user();
        $social = Social::getSocialsById($id);
        return view('admin/editSocials', ['social' => $social, 'user' => $user,]);

    }

    public function updateSocials(Request $request)
    {

        Social::updateSocial($request);
        return redirect()->route('viewSocials');
    }
}
