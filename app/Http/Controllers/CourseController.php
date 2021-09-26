<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Package;
use View;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
         
        $view = View::make('adminpanel/pages/course_list', ['courses'=>$courses]);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    public function indexWebsite()
    {
        $courses = Course::orderBy('created_at', 'DESC')->get();
        return view('pages/courses', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $packages = Package::all();
         
        $view = View::make('adminpanel/pages/course_add', ['categories'=>$categories, 'packages'=>$packages]);
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
        Course::create($request->all());
        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('pages/coursedetails', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $categories = Category::all();
         $packages = Package::all();

        $view = View::make('adminpanel/pages/course_edit', ['categories'=>$categories, 'course'=>$course, 'packages'=>$packages]);
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
        $course = Course::find($id);
        $course->update($request->all());
        return redirect()->route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfuly !');
    }

    public function search(Request $request)
    {
        $courses = Course::where('name', 'like', '%'.$request->search_text.'%')->paginate(10);
        return view('pages/courses', compact('courses'));
    }

    public function videos()
    {

        $categories = Category::all();
        $courses = Course::paginate(10);
        return view('pages/videos', compact('courses', 'categories'));
    }

    public function courseByCategories($id)
    {

        $courses = Course::where('category_id', $id)->get();
        return view('pages/courses', compact('courses'));
    }

}
