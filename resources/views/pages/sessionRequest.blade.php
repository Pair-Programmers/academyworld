@extends('layouts.main')

@section('title', "sessionRequest")

@section('contents')
    <style>
        .main-container
        {
        margin-top: 70px;
        min-height:70vh 
        }
    #student-request
    {
        margin-top: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid;
    }
    .student-image-container
    {
        display: flex;
        padding: 5px;
        flex-direction: column;
    }
    .student-image
    {
        border-radius: 15px;
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2);
    }
    .button-block
    {
        padding: 5px;
    }
    .student-name
    {
        margin: 5px;
    }
    #confirm
    {
        border: none;
        background-color: #4484E6;
        color: white;
        padding: 5px 10px;
    }
    #confirm:hover
    {
        transition-duration: 200ms;
        background-color: #0065ff;
    }
    #delete
    {
        border: none;
        background-color: #d4e2f7;
        color: black;
        padding: 5px 10px;
    }
    #delete:hover
    {
        transition-duration: 200ms;
        background-color: #a5c6f7;
    }
    .student-request-receiving-time
    {
        margin: 5px 0px;
        text-align: right;
    }
    @media screen and (max-width:769px)
    {
        #student-request
        {
            flex-direction: column;
        }
        #button-block
        {
            display: flex;
    flex-direction: column;
    align-items: center;
        }
    #confirm
    {
        width: 100%;
    }
    #delete
    {   width: 100%;
        margin: 5px;
    }
    }
    </style>

<div class="main-container container">

    @forelse ($session_requests as $requests)
    <div id="student-request">
        <div class="student-image-container">
            <img src="{{asset('storage')}}/users/{{$requests->student->profile_image}}" height="100px" width="100px" class='student-image' alt="Image of student">
            <label for="student_img" class="student-name">{{$requests->student->name}}</label>
      </div>
      <div id="button-block" class='button-block'>
        <button id="confirm" onclick="confirmRequest({{$requests->id}})">Confirm</button>
        <p class='student-request-receiving-time'>{{$requests->created_at}}</p>
      </div>
    </div>
    @empty
        <div class="text-center">No request yet !</div>
    @endforelse

</div>

<script>
    function confirmRequest(id) {
      //alert(id);
        $.ajax({
            method: 'GET',
            url: '{{url('session_request_accept')}}/' + id,

            success: function(data) {
              alert('Request Accepted Successfully !');
            }
        });
    }
</script>

 @endsection
