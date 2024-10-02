<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from sarasoftware',
            'body' => 'This is for testing mail using smtp mail',
        ];
        Mail::to('sararajatsoftware@gmail.com')->send(new DemoMail($mailData));
    }
}
