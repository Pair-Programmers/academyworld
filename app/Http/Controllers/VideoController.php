<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Video;
use View;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
          
        $view = View::make('adminpanel/pages/video_list', ['videos'=>$videos]);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
         
        $view = View::make('adminpanel/pages/video_add', ['courses'=>$courses]);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $inputs = $request->all();
        if($request->hasfile('video'))
        {
            $video = $request->video;
            $name=time() . '_'. $request->name . '.'. $video->getClientOriginalExtension();
            $video->move(public_path().'/storage/videos/', $name); 
        }

        $inputs['video'] = $name;

        Video::create($inputs);
        return redirect()->route('video.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::find($id);
        $courses = Course::all();

        $view = View::make('adminpanel/pages/video_edit', ['video'=>$video, 'courses'=>$courses]);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video = Video::find($id);

        $inputs = $request->all();
        if($request->hasfile('video'))
        {
            $video = $request->video;
            $name=time() . '_'. $request->name . '.'. $video->getClientOriginalExtension();
            $video->move(public_path().'/storage/videos/', $name); 
        }

        $inputs['video'] = $name;

        $video->update($inputs);
        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Video::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfuly !');
    }
}
