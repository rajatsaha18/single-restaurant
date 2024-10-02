<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadPdfController extends Controller
{
    public function index()
    {
        $filePath = public_path('files/pdf-1.pdf');
        return response()->download($filePath);
        // dd($filePath);


        // else
        // {
        //     return response()->json(['error'=> 'pdf file not found'],404);
        // }
    }
}
