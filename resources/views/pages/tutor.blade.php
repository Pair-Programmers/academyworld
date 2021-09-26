@extends('layouts.main')

@section('title', "Tutor")

@section('contents')

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Tutors</h1>
                    <p>We are hiring our countries best tutor for the students</p>
                </div>
    </header>

    
    <div class="container">
    	<div class="row">
    	<div class="col-md-2">
    		<h3>Tutors</h3>
    	</div>
    	<div class="col-md-10">
			<form action="{{ route('teacher.search') }}" method="Post"> 
                @csrf
			    <div class="col-md-10">
			    	<br>
			      <div class="input-group">
			        <input type="text" name="search_text" class="form-control" value="{{old('search_text')}}" placeholder="Search by Tutor Name" id="txtSearch"/>
			        <div class="input-group-btn">
			          <button class="btn btn-primary" type="submit">
			            <span class="glyphicon glyphicon-search"></span>
			          </button>
			        </div>
			      </div>
			  </div>
			</form>
    	</div>
    	</div>
<p>
   
</p>
<br/>


</div>

<style>
.checked {
  color: orange;
}
</style>

<section class="team-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Our Teachers/Trainers</h3>
                    <p>Technical teams rely on AcademyWorl for Business to upskill across critical topics like Artificial Intelligence, Machine Learning, Deep Learning, AWS, and more. With 33,500+ hours of always-evolving tech skill courses taught by top global instructors, your team will be ready for whatever comes next – whether that's tackling the next project, learning a new skill, or mastering a role.</p>
                    <br />
                </div>
            </div>
            <div class="row">

                @foreach ($teachers as $teacher)
                <div class="col-md-2 col-sm-4 col-xs-4">
                    <!-- Team Member -->
                    <div class="team-member pDark">
                        <!-- Image Hover Block -->
                        <a href="{{route('teacher.show', $teacher->id)}}">
                            <div class="member-img">
                                <!-- Image  -->
                                <img class="img-responsive" src="{{asset('storage')}}/users/{{$teacher->profile_image}}" alt="">
                            </div>
                            <!-- Member Details -->
                            <h4>{{$teacher->name}}</h4>
                        </a>
                        <!-- Designation -->
                        <span class="pos">{{$teacher->qualification}}</span>
                        <div class="team-socials">
                            @for ($i = 1; $i <= 5; $i++)
                                @if($i<= $teacher->rating)
                                <span class="fa fa-star checked"></span>
                                @else
                                <span class="fa fa-star "></span>
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
                @endforeach



                
            </div>
        </div>
    </section>
 @endsection
