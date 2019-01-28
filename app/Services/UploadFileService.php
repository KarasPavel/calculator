<?php
/**
 * Created by PhpStorm.
 * User: pinofran
 * Date: 26.01.19
 * Time: 17:15
 */

namespace App\Services;

use App\Http\Controllers\Controller;

class UploadFileService extends Controller
{
    public $pathFile;
    public $newFileName;

    public function upload($request)
    {
        $this->pathFile = public_path('uploadFiles/');
        $this->newFileName = self::getGUID()
            . '.' . $request->file->getClientOriginalExtension();
        if (!file_exists($this->pathFile)) {
            mkdir($this->pathFile, 0777, true);
        }
        $request->file->move($this->pathFile, $this->newFileName);
    }

    public static function getGUID()
    {
        if (function_exists('com_create_guid')) {
            return com_create_guid();
        } else {
            mt_srand((double)microtime() * 10000);//optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid = chr(123)// "{"
                . substr($charid, 0, 8) . $hyphen
                . substr($charid, 8, 4) . $hyphen
                . substr($charid, 12, 4) . $hyphen
                . substr($charid, 16, 4) . $hyphen
                . substr($charid, 20, 12)
                . chr(125);// "}"
            return $uuid;
        }
    }
}