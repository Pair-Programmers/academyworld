<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::orderBy('created_at', 'DESC')->paginate('3');
        $free_courses = Course::where('for_package', '1')->orderBy('created_at', 'DESC')->paginate('5');
        return view('pages/index', compact('courses', 'free_courses'));
    }

    

}
