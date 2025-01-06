<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function create()
    {
        return view('upload-video');
    }

    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,mov,avi,flv|max:20000',
        ]);

        $videoPath = $request->file('video')->store('videos', 'public');

        Video::create([
            'video_path' => $videoPath
        ]);

        return redirect()->back()->with('success', 'تم تحميل الفيديو بنجاح');
    }
}
