<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableBook extends Model
{
    use HasFactory;
    // private static $tableBook;
    // private static $date;
    // private static $time;

    // public static function newTableBook($request)
    // {
    //     self::$time = date("h:i A", strtotime($request->time));
    //     self::$date = date("d-m-Y", strtotime($request->date));
    //     self::$tableBook = new TableBook();
    //     self::$tableBook->name                  = $request->name;
    //     self::$tableBook->email                 = $request->email;
    //     self::$tableBook->mobile                = $request->mobile;
    //     self::$tableBook->date                  = self::$date;
    //     self::$tableBook->time                  = self::$time;
    //     self::$tableBook->guests                = $request->guests;
    //     self::$tableBook->reservation_type      = $request->reservation_type;
    //     self::$tableBook->save();

    // }
}
