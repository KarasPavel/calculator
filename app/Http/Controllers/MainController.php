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
        return view('main2', ['user' => $user, 'photo' => $photo, 'video' => $video]);
    }

}
