<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use Faker\Provider\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    //
    public $actual_link;
    public $url_origin;

    /**
     * PhotoController constructor.
     * @param Request|null $request
     */
    public function __construct(Request $request = null)
    {
        if ($request->photo) {
            Photo::CheckType($request);
        }
        $this->actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $this->url_origin = substr($this->actual_link, 7, 14);
    }

    /**
     * @param Request $request
     */
    public function uploadPhoto(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:1|max:100',
        ]);
        Photo::uploadPhoto($request);
        return back();
//        $destinationPath = public_path('/images/Stairs/1/');
//        $image = $request->file('photo');
//        $image->move($destinationPath, 'fuck'.'.png');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewPhoto()
    {
        $user = Auth::user();
        $photo = Photo::getPhotos();
        return view('admin/photos/viewPhoto', ['photo' => $photo, 'user' => $user, 'url_origin' => $this->url_origin]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deletePhoto($id)
    {
        $photo = Photo::getPhotoById($id);
        $photo = public_path($photo[0]->photo);
        unlink($photo);
        Photo::deletePhoto($id);
        return back();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createPhoto()
    {
        $user = Auth::user();
        $type = Photo::getTypes();
        return view('admin/photos/createPhoto', ['user' => $user, 'type' => $type]);
    }
}










