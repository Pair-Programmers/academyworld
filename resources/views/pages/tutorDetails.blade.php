@extends('layouts.main')

@section('title',"tutorDetails")

@section('contents')
<style>
.skills {
    padding: 0px;
    margin-top: 10px;
}

.label-rate {
    padding: 0px 10px;
    font-size: 2rem;
}

.label-rate:nth-child(4) {
    padding: 0px 0px 10px 0px;
}

.label-rate-inp {}

.label-rate::selection {
    color: #fff;
    background: #6665ee;
}

.skill-bars {
    padding: 25px 30px;
    width: 100%;
    background: #fff;
    box-shadow: 5px 5px 20px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
}

.skill-bars .bar {
    margin: 20px 0;
}

.skill-bars .bar:first-child {
    margin-top: 0px;
}

.skill-bars .bar .info {
    margin-bottom: 5px;
}

.skill-bars .bar .info span {
    font-weight: 500;
    font-size: 17px;
    opacity: 0;
    animation: showText 0.5s 1s linear forwards;
}

@keyframes showText {
    100% {
        opacity: 1;
    }
}

.skill-bars .bar .progress-line {
    height: 10px;
    width: 100%;
    background: #f0f0f0;
    position: relative;
    transform: scaleX(0);
    transform-origin: left;
    border-radius: 10px;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05),
        0 1px rgba(255, 255, 255, 0.8);
    animation: animate 1s cubic-bezier(1, 0, 0.5, 1) forwards;
}

@keyframes animate {
    100% {
        transform: scaleX(1);
    }
}

.bar .progress-line span {
    height: 100%;
    position: absolute;
    border-radius: 10px;
    transform: scaleX(0);
    transform-origin: left;
    background: #6665ee;
    animation: animate 1s 1s cubic-bezier(1, 0, 0.5, 1) forwards;
}
.container-tutor{
    display:flex;
    flex-direction:column;
    align-items:center;
    padding-right:20px;
}
.one-line-text{
      display: -webkit-box;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
  overflow: hidden;
  width:176px;
}
@media screen and (max-width:769px) {
    .label-rate {
        padding: 0px 4px;
        font-size: 1.5rem !important;
    }
}

.bar .progress-line.html span {
    width: 90%;
}

.bar .progress-line.css span {
    width: 60%;
}

.bar .progress-line.jquery span {
    width: 85%;
}

.bar .progress-line.python span {
    width: 50%;
}

.bar .progress-line.mysql span {
    width: 75%;
}

.progress-line span::before {
    position: absolute;
    content: "";
    top: -10px;
    right: 0;
    height: 0;
    width: 0;
    border: 7px solid transparent;
    border-bottom-width: 0px;
    border-right-width: 0px;
    border-top-color: #000;
    opacity: 0;
    animation: showText2 0.5s 1.5s linear forwards;
}

.progress-line span::after {
    position: absolute;
    top: -28px;
    right: 0;
    font-weight: 500;
    background: #000;
    color: #fff;
    padding: 1px 8px;
    font-size: 12px;
    border-radius: 3px;
    opacity: 0;
    animation: showText2 0.5s 1.5s linear forwards;
}

@keyframes showText2 {
    100% {
        opacity: 1;
    }
}

.progress-line.html span::after {
    content: "90%";
}

.progress-line.css span::after {
    content: "60%";
}

.progress-line.jquery span::after {
    content: "85%";
}

.progress-line.python span::after {
    content: "50%";
}

.progress-line.mysql span::after {
    content: "75%";
}

.checked {
    color: orange;
}

.font-bold {
    font-weight: bold;
    font-size: 15px;
    margin-top: 10px;
}

.color-blue {
    font-size: 18px !important;
    font-weight: bold !important;
    color: #6665ee;
}
</style>

<header id="head" class="secondary">
    <div class="container">
        <h3>Tutor Detail</h3>
    </div>
</header>
<div class="tutor-details-container container" style="padding: 0px;margin:40px auto;">
    <div class="col-md-3 col-sm-12 col-xs-12 container-tutor">
        <!-- Team Member -->

        <div class="team-member text-center">
            <!-- Image Hover Block -->
            <div class="member-img">
                <!-- Image  -->
                <img class="img-responsive" src="{{asset('storage')}}/users/{{$teacher->profile_image}}" alt="">
            </div>
            <!-- Member Details -->
            <h4>{{$teacher->name}}</h4>
            <!-- Designation -->
            <span class="pos">{{$teacher->qualification}}</span>
            <div class="team-socials">
                @for ($i = 1; $i <= 5; $i++) @if($i<=$teacher->rating)
                    <span class="fa fa-star checked"></span>
                    @else
                    <span class="fa fa-star "></span>
                    @endif
                    @endfor
            </div>
        </div>
        <p class="one-line-text">{{$teacher->description}}</p>

        <div style="margin-bottom:30px">
            @if(Auth::check())
            @if(Auth::user()->type == 'Student')
            <button @if($isRequestSent=='Yes' ) disabled @endif onclick="sendSessionRequest({{$teacher->id}})"
                class="btn">@if($isRequestSent == 'Yes') Request Sent @else Send Session Request @endif</button>
            @else
            <button disabled onclick="sendSessionRequest({{$teacher->id}})" class="btn">Send Session Request</button>

            @endif
            @else
            <button disabled onclick="sendSessionRequest({{$teacher->id}})" class="btn">Send Session Request</button>
            @endif
        </div>
    </div>

    <div class="col-md-9 col-sm-12 col-xs-12 skills ">

        <div class="skill-bars">

            <div class="bar">
                <div class="info">
                    <span class="color-blue">Major Subject</span>
                </div>
                <div class="font-bold">{{$teacher->subject}}</div>
            </div>
            <div class="bar">
                <div class="info">
                    <span class="color-blue">Qualification</span>
                </div>
                <div class="font-bold">{{$teacher->qualification}}</div>
            </div>
            <div class="bar">
                <div class="info">
                    <span class="color-blue">Skills</span>
                </div>
                <div class="font-bold">{{$teacher->skills}}</div>
            </div>
            <div class="bar">
                <div class="info">
                    <span class="color-blue">Joined Date</span>
                </div>
                <div class="font-bold">{{$teacher->created_at}}</div>
            </div>

        </div>


        <div>
            
    @if (\Session::has('success'))
    <div class="alert alert-success" style="margin-top:20px;">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
    @endif

            <form method="POST" role="form" id="myRatingForm" action="{{route('teacher.store_rating')}}">
                @csrf
                <div class="row m-0">
                    <div style="display: flex;justify-content:space-between;padding:50px 20px 0px 20px">
                        <div>
                            <div>Rate</div>
                            <input class="label-rate-inp" type="hidden" name="user_id" value="{{$teacher->id}}">
                            <input id="Excellent" class="label-rate-inp" type="radio" id="1" name="rating" value="5" checked>
                    <label class="label-rate" for="Excellent" 
                    style="padding:0px 10px">Excellent</label>
                            <input id="Good" class="label-rate-inp" type="radio" id="1" name="rating" value="4">
                            <label class="label-rate" for="Good">Good</label>
                            <input id="Neutral" class="label-rate-inp" type="radio" id="1" name="rating" value="3">
                            <label class="label-rate" for="Neutral">Neutral</label>
                            <input id="No_Bad" class="label-rate-inp" type="radio" id="1" name="rating" value="2">
                            <label class="label-rate" for="No_Bad">No Bad</label>
                            <input id="bad" class="label-rate-inp" type="radio" id="Bad" name="rating" value="1">
                            <label class="label-rate" for="bad">Bad</label>
                        </div>
                        <div>
                            <button type="submit" class="btn"> Sumit </button>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>

<script type="text/javascript">

function sendSessionRequest(id) {
    $.ajax({
        method: 'GET',
        url: '{{url('teacher_session_request')}}/' + id,
        
        success: function(data) {
            if(data.error){
                alert('You cannot send Request, Please Upgrade Your Package');
            }else{
                alert('Request Sent Successfully !');
            }
            
            
        },
        error: function(data) {
            alert('Please Upgrade Your Package');
        }
    });
}

</script>
@endsection