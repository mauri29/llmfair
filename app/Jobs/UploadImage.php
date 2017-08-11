<?php

namespace App\Jobs;

use File;
use Image;
use Storage;
use App\Models\Channel;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UploadImage implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $channel;
    public $fileId;

    public function __construct(Channel $channel, $fileId)
    {
        //
        $this->channel = $channel;
        $this->fileId = $fileId;
    }

    public function handle()
    {
        //get the image
        
        $path = storage_path() . '/uploads/' . $this->fileId;
        $fileName = $this->fileId . '.png';
        //resize
        Image::make($path)->encode('png')->fit(30, 30, function($c){
            $c->upsize();
        })->save();
        //upload and delete file
        if(Storage::disk('s3images')->put('/profile/' . $fileName, fopen($path, 'r+'))){
            File::delete($path);
        };
        //upload to s3
        $this->channel->image_filename = $fileName;
        $this->channel->save();
        //update channel image
        $this->channel->image_filename = $fileName;
        $this->channel->save();


    }
}
