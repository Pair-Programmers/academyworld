<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SessionRequest;
use Auth;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $teachers = User::where('type', 'Tutor')->get();

    }

    public function indexWebsite()
    {
        $teachers = User::where('type', 'Tutor')->get();
        return view('pages/tutor', compact('teachers'));
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
        $isRequestSent = 'No';
        if(Auth::check()){
            $request = SessionRequest::where('to_user_id', $id)->where('from_user_id', Auth::id())->first();
            
            if($request){
                $isRequestSent = 'Yes';
            }
            else{
                $isRequestSent = 'No';
            }
        }
        
        $teacher = User::find($id);
        return view('pages/tutorDetails', compact('teacher', 'isRequestSent'));
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

    public function sessionRequest($id)
    {
        if(Auth::check()){
            $count = SessionRequest::where('from_user_id', Auth::id())->count();
            if(Auth::user()->current_package == 'Basic'){
                if($count <= 5){
                    SessionRequest::create(['from_user_id'=>Auth::id(), 'to_user_id'=>$id]);
                }else {
                    return response()->json(['error'=>'Contact form submitted successfully']);
                }
            }elseif(Auth::user()->current_package == 'Standard'){
                if($count <= 10){
                    SessionRequest::create(['from_user_id'=>Auth::id(), 'to_user_id'=>$id]);
                }
            }elseif(Auth::user()->current_package == 'Premium'){
                SessionRequest::create(['from_user_id'=>Auth::id(), 'to_user_id'=>$id]);
            }else {
                return response()->json(['error'=>'Contact form submitted successfully']);
            }
            
        }
        
    }

    public function search(Request $request)
    {
        $teachers = User::where('type', 'Tutor')->where('name', 'like', '%'.$request->search_text.'%')->paginate(10);
        return view('pages/tutor', compact('teachers'));
    }


    public function storeRating(Request $request)
    {
        $user = User::find($request->user_id);
        $rating = $user->rating;
        $user->update(['rating'=>($rating + $request->rating)/2]);

        return redirect()->route('teacher.show', $request->user_id)->with('success', 'Rated Successfully !');
    }
}
