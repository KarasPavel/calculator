<?php

namespace App\Http\Controllers\Admin;

use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    //
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewVideos()
    {
        $user = Auth::user();
        $video = Video::getVideos();
        return view('admin/videos/viewVideo', ['video' => $video, 'user' => $user]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getEditVideos($id)
    {
        $user = Auth::user();
        $video = Video::getVideoById($id);
        return view('admin/videos/editVideo', ['video' => $video, 'user' => $user]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEditVideos(Request $request)
    {
//        dd($request);
        $request->validate([
            'name' => 'required|string|min:1|max:100',
            'video' => 'required|string|min:1|max:100'
        ]);
        Video::updateVideo($request);
        return redirect()->route('viewVideos');
    }

}
