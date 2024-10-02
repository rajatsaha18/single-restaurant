<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AdminVideoGallery;
use Illuminate\Http\Request;
use Session;

class VideoGalleryController extends Controller
{
    private $videos;
    private $videoGallery;
    public function index()
    {
        $this->videos = AdminVideoGallery::all();
        return view('admin.videoGallery.index',['videos' => $this->videos]);
    }
    public function create()
    {
        return view('admin.videoGallery.create');
    }
    public function newVideo(Request $request)
    {
        AdminVideoGallery::newVideo($request);
        return redirect()->back()->with('message','Video Save Successfully');
    }
    public function edit($id)
    {
        $this->videoGallery = AdminVideoGallery::find($id);
        return view('admin.videoGallery.edit',['VideoGallery' => $this->videoGallery]);
    }
    public function update(Request $request,$id)
    {
        AdminVideoGallery::updateVideoGallery($request,$id);
        return redirect()->back()->with('message','Video Update Successfully');
    }
    public function delete($id)
    {
        AdminVideoGallery::deleteVideoGallery($id);
        return redirect()->back()->with('message','Video Delete Successfully');
    }
}
