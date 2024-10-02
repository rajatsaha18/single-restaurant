<?php

namespace App\Http\Controllers\admin;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class VideoController extends Controller
{
   //call variable
    private $video;
    private $videos;

    //call function
    public function index()
    {
        $this->videos = Video::where('status',1)->get();
        // dd($this->video);
        return view('admin.video.index',['videos' => $this->videos]);
    }
    public function create()
    {
        return view('admin.video.create');
    }
    public function store(Request $request)
    {
       Video::newVideo($request);
       return redirect()->back()->with('message', 'Create Video Successfully');
    }
    public function edit($id)
    {
       $this->video = Video::find($id);
       return view('admin.video.edit',['video' => $this->video]);
    }
    public function update(Request $request, $id)
    {
       Video::updateVideo($id,$request);
       return redirect()->back()->with('message', 'Update Video Successfully');
    }
    public function delete($id)
    {
       Video::deleteVideo($id);
       return redirect()->back()->with('message', 'Delete Video Successfully');
    }
}
