<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideoController extends Controller
{
    // Mostrar video
    public function show($slug){
        $video = Video::whereSlug($slug)->first();
        return view('video', compact('video'));
    }
}
