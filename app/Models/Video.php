<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    private static $video;
    private static $imageName;
    private static $directory;
    private static $imageUrl;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'video-images/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;

    }
    public static function newVideo($request)
    {
        self::$video = new Video();
        self::$video->title         = $request->title;
        self::$video->image         = self::getImageUrl($request->file('image'));
        self::$video->description   = $request->description;
        self::$video->video         = $request->video;
        self::$video->status        = $request->status;
        self::$video->save();

    }

    public static function updateVideo($id,$request)
    {
        self::$video = Video::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$video->image))
            {
                unlink(self::$video->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else{
            self::$imageUrl = self::$video->image;
        }
        self::$video->title         = $request->title;
        self::$video->image         = self::$imageUrl;
        self::$video->description   = $request->description;
        self::$video->video         = $request->video;
        self::$video->status        = $request->status;
        self::$video->save();

    }

    public static function deleteVideo($id)
    {
        self::$video = Video::find($id);
        if(file_exists(self::$video->image))
        {
            unlink(self::$video->image);
        }
        self::$video->delete();
    }
}
