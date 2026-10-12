<?php

namespace App\Http\Controllers;

use App\Models\Video;

class VideoController extends Controller
{
    // Mostrar video
    public function show($slug){
        $video = Video::whereSlug($slug)->with('others')->first();
        return view('video', compact('video'));
    }


    // Mostrar cortinilla
    public function info_curtain(){
        return view('small-curtain');
    }
}
