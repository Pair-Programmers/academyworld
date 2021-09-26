<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SessionRequest;
use App\Models\Chat;
use Auth;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->type == 'Tutor') {
                $chatUsers = SessionRequest::join('users', 'users.id', 'session_requests.from_user_id')
                ->where('to_user_id', Auth::id())->where('status', 'Accepted')->orderBy('session_requests.updated_at', 'DESC')->get();
            } elseif (Auth::user()->type == 'Student') {
                $chatUsers = SessionRequest::join('users', 'users.id', 'session_requests.to_user_id')
                ->where('from_user_id', Auth::id())->where('status', 'Accepted')->orderBy('session_requests.updated_at', 'DESC')->get();
            }
            $chat = Chat::all();
            return view('pages/chat', compact('chatUsers', 'chat'));
        } else {
            return redirect()->route('login');
        }
    }
    public function getChat($id)
    {
        return $chat = Chat::where('from_user_id', Auth::id())->where('to_user_id', $id)
        ->orWhere('to_user_id', Auth::id())->where('from_user_id', $id)->join('users','users.id','from_user_id')->get();
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $inputs['from_user_id'] = Auth::id();
       $chat_all = Chat::create($inputs);
        return response()->json(['chat'=>$chat_all]);    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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

    public function sendMessage(Request $request, $id)
    {
        if (Auth::check()) {
            $inputs = $request->all();
            $inputs['from_user_id'] = Auth::id();
            Chat::create($inputs);
        } else {
            return redirect()->route('login');
        }
    }
}