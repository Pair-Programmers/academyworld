<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\File;
use View;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::all();
          
        $view = View::make('adminpanel/pages/file_list', ['files'=>$files]);
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
         
        $view = View::make('adminpanel/pages/file_add', ['courses'=>$courses]);
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
        if($request->hasfile('document'))
        {
            $file = $request->document;
            $name=time() . '_'. $request->name . '.'. $file->getClientOriginalExtension();
            $file->move(public_path().'/storage/documents/', $name); 
        }

        $inputs['document'] = $name;

        File::create($inputs);
        return redirect()->route('file.index');
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
        $file = File::find($id);
        $courses = Course::all();

        $view = View::make('adminpanel/pages/file_edit', ['file'=>$file, 'courses'=>$courses]);
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
        $file = File::find($id);

        $inputs = $request->all();
        if($request->hasfile('document'))
        {
            $file = $request->document;
            $name=time() . '_'. $request->name . '.'. $file->getClientOriginalExtension();
            $file->move(public_path().'/storage/documents/', $name); 
        }

        $inputs['document'] = $name;

        $file->update($inputs);
        return redirect()->route('file.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        File::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfuly !');
    }
}
