<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function main()
    {
        $user = Auth::user();
        $photo = Photo::getPhotosWithoutPaginate();
        $video = Video::getVideos();
        return view('main2', ['user' => $user, 'photo' => $photo, 'video' => $video]);
    }
}
