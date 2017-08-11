<?php

namespace App\Http\Controllers;

use App\Jobs\UploadVideo;
use App\Http\Requests;
use Illuminate\Http\Request;



class VideoUploadController extends Controller
{
    //
    public function index()
    {
    	return view('video.upload');
    }

    public function store(Request $request)
    {
    	//grab user channel
    	$channel = $request->user()->channel()->first();
    	//lookup the video
    	$video = $channel->videos()->where('uid', $request->uid)->firstOrFail();
    	//move to temp location
    	$request->file('video')->move(storage_path() . '/uploads', $video->video_filename);
    	//upload to s3
    	$this->dispatch(new UploadVideo(
    		$video->video_filename
    	));
    	return response()->json(null, 200);

    }
}
