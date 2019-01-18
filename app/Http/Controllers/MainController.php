<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Video;
use http\Env\Response;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function getPages(Request $request)
    {
        $user = Auth::user();
        $photo = Photo::getPhotosWithoutPaginate();
        $video = Video::getVideos();
        $views = [
            ''=>'home',
            'lestnicy_i_poly'=>'first_p',
            'dushevye_ograjdeniya'=>'second_p',
            'peregorodki_i_dveri'=>'fourth_p',
            'zerkalnoe_panno'=>'third_p',
            'skinali'=>'fifth_p',
            'raschet_stoimosti'=>'seventh_p',
            'kontakty'=>'sixth_p',
        ];
        $url = $request->data;
        $url = explode('#', $url);
        if(!isset($url[1])){
            return view($views[''],  ['user' => $user, 'photo' => $photo, 'video' => $video]);
        } else {
            return view($views[$url[1]],  ['user' => $user, 'photo' => $photo, 'video' => $video]);
        }
//        dd($url[1]);
//        dd($request->data);

//        return view($views[$url[1]],  ['user' => $user, 'photo' => $photo, 'video' => $video]);
//        dd(view('home', ['user' => $user, 'photo' => $photo, 'video' => $video])->render());
//        dd($returnHTML = view('main2')->render());
//        return response()->json(['home'=>$returnHTML]);


//        $user = Auth::user();
//        $photo = Photo::getPhotosWithoutPaginate();
//        $video = Video::getVideos();
//        return view('main2', ['user' => $user, 'photo' => $photo, 'video' => $video]);
//        return view('second_p', ['user' => $user, 'photo' => $photo, 'video' => $video]);
    }

    public function main()
    {
        $user = Auth::user();
        $photo = Photo::getPhotosWithoutPaginate();
        $video = Video::getVideos();
//        return view('main2', ['user' => $user, 'photo' => $photo, 'video' => $video]);
        return view('general', ['user' => $user, 'photo' => $photo, 'video' => $video]);
    }

}
