<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use View;
use App\Models\User;

class UserSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        
        $view = View::make('adminpanel/pages/user_list', ['users'=>$users]);
        $view->nest('sidebar','adminpanel/partials/sidebar');
        $view->nest('header','adminpanel/partials/header');
        return $view;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStudentSetting()
    {
        if(Auth::check()){
            return view('pages/student_setting');
        }
        else{
            return redirect()->route('login');
        }
       
    }

    public function createTeacherSetting()
    {
        if(Auth::check()){
            return view('pages/teacher_setting');
        }
        else{
            return redirect()->route('login');
        }
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
    public function update(Request $request)
    {
        $inputs =  $request->all();
        if(!empty($request->image)){
            $image_name = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path().'/storage/users', $image_name); 
            $inputs['profile_image'] = $image_name;
        }

        if(empty($request->password)){
            unset($inputs['password']);
        }
        else{
            $inputs['password'] = Hash::make($request->password);
        }
        

        $user = User::find(Auth::id());
        $user->update($inputs);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->back()->with('success', 'Deleted Successfuly !');
    }
}
