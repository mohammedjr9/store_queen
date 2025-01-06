<?php

namespace App\Http\Controllers\Front;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class uploadvideo extends Controller
{
    public function showVideoPage()
    {
        $video = Video::latest()->first();

        return view('video-page', compact('video'));
    }

}
