<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Services\UploadFileService;

class Cart extends Model
{
    public static function addProduct(Request $request)
    {
        if (!is_null($request->file) && $request->file != 'undefined') {
            $file = new UploadFileService();
            $file->upload($request);
            $fileName = $file->newFileName;
        } else {
            $fileName = '';
        }
        $result = json_decode($request->data);
        $result->file = $fileName;

        if (Session::has(Session::getId())) {
            Session::push(Session::getId(), $result);
        } else {
            Session::put(Session::getId(), []);
            Session::push(Session::getId(), $result);
        }

        $val = Session::get(Session::getId());
        return $val;
    }

    public static function deleteProduct($id)
    {

        $value = Session::get(Session::getId());
        array_splice($value, $id, 1);
        Session::put(Session::getId(), []);
        foreach ($value as $item) {
            Session::push(Session::getId(), $item);
        }
        return $value;
    }

    public static function getCart()
    {
        $value = Session::get(Session::getId());
        return $value;
    }

    public static function resetCart()
    {
        Session::forget(Session::getId());;
    }
}
