<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Video;
use App\Models\File;
use App\Models\Category;
use View;
use Session;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('adminLogin')){

            $total_teachers = User::where('type', 'Tutor')->count();
            $total_students = User::where('type', 'Student')->count();
            $total_courses = Course::count();
            $total_videos = Video::count();
            $total_files = File::count();
            $total_categories = Category::count();

            $view = View::make('adminpanel/pages/dashboard',
             compact('total_teachers', 'total_students', 'total_courses', 'total_videos', 'total_files', 'total_categories'));
            $view->nest('sidebar','adminpanel/partials/sidebar');
            $view->nest('header','adminpanel/partials/header');
            $view->nest('footer','adminpanel/partials/footer');
        }else{
            $view = View::make('adminpanel/pages/login');
        }

        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
