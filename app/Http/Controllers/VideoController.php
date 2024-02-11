<?php

namespace App\Http\Controllers;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function home (){
        $listevideo = Video::all();
        $lastvideo = Video::orderBy('id', 'DESC')->first();
        return view('index',['lastvideo' => $lastvideo,'listevideo' => $listevideo]);
    }

    public function admin (){

        return view('admin');
    }
    public function insertvideo (){

        
        $attributes =  request()->validate([
            'title' => 'required',
            'link' => 'nullable',
            'description' => 'required'
        ]);

        Video::create($attributes);
        return redirect('/listevideo');
    }

    public function listevideo(){

        $listevideo = Video::all();
        return view('listevideo',['listevideo' => $listevideo]);
    }

    public function edit($id){
        $video = Video::find($id);
         return view('edit',compact('video'));
    }

    public function update(Request $request, $id)
    {
        $video = Video::find($id);
        $video->title = $request->input('title');
        $video->link = $request->input('link');
        $video->description = $request->input('description');
        $video->update();
        return redirect('/listevideo');
    }
    public function delete($id){
        $video = Video::find($id);
        $video->delete();
        return redirect('/listevideo');
    }
}
