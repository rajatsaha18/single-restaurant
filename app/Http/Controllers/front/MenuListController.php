<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Complex\Functions;
use Illuminate\Http\Request;

class MenuListController extends Controller
{
    public function index()
    {
        return view('web.menu-list');
    }
}
