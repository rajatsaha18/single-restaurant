<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminVideoGallery extends Model
{
    use HasFactory;
    private static $video;

    public static function newVideo($request)
    {
        self::$video = new AdminVideoGallery();
        self::$video->admin_video   = $request->admin_video;
        self::$video->status        = $request->status;
        self::$video->save();
    }
    public static function updateVideoGallery($request,$id)
    {
        self::$video = AdminVideoGallery::find($id);
        self::$video->admin_video   = $request->admin_video;
        self::$video->status        = $request->status;
        self::$video->save();
    }
    public static function deleteVideoGallery($id)
    {
        self::$video = AdminVideoGallery::find($id);
        self::$video->delete();
    }
}
