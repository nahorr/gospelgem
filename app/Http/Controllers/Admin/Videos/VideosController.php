<?php

namespace App\Http\Controllers\Admin\Videos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;

class VideosController extends Controller
{
    public function manageVideos()
    {
    	$videos = Video::get();

    	return view('admin/videos/manage-videos', compact('videos'));
    }

    public function addVideo(Request $request)
    {

    	$this->validate(request(), [

            'video_title' => 'required',
            'video_description' => 'required',
            'video_link' => 'required',
            'video_page' => 'required',
        ]);

        Video::insert([
            'video_title' => $request->video_title,
            'video_description' => $request->video_description,
            'video_link' => $request->video_link,
            'video_page' => $request->video_page,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
       
        flash('Video link Added!')->success();
        return back();
   }

   public function editVideo(Request $request, Video $video)
    {
      	$this->validate(request(), [
			'video_title' => 'required',
            'video_description' => 'required',
            'video_link' => 'required',
            //'video_page' => 'required',
        ]);
        
        $edit_video = Video::where('id', $video->id)->first();

        $edit_video->video_title = $request->video_title;
        $edit_video->video_description = $request->video_description;
        $edit_video->video_link = $request->video_link;
        //$edit_video->video_page = $request->video_page;
      
        $edit_video->save();

        flash('Video Updated!')->success();
        return back();

     }

     public function deleteVideo(Video $video)

    {
        Video::where('id', $video->id)->delete();

        flash('video deleted!')->warning();

        return back();
    }

}
