@extends('layouts.main')

@section('title', 'Courses')

@section('contents')

<style>
	.p-10
	{
		padding: 10px;
	}
    .text-center
    {
        text-align: center;
    }
    .filter-search-videos{
        width:50%;
    }
    @media screen and (max-width:769px){
        .filter-search-videos, .filter_drop_down_1, #filter_drop_down{
        width:100%;
    }
    }
</style>
    <header id="head" class="secondary">
        <div class="container">
            <h1>Videos</h1>
            <p>We are here to provide you the best cousres in our country, join us and choose a course</p>
        </div>
    </header>


    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h3 class="px-3">Categories</h3>
            </div>
            <div class="col-md-10">
                <form action="{{ route('course.search') }}" method="Post">
                    @csrf
                    <div class="col-md-10 filter-search-videos">
                        <br>
                        <div class="input-group col-md-10 filter_drop_down_1">
                                <select name="format" id="filter_drop_down" class="col-lg-12 p-10" onchange="filterVideos(event)">
                                    <option selected disabled>Select</option>
                                    <option selected value="All">All</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            {{-- <input type="text" name="search_text" class="form-control" value="{{old('search_text')}}" placeholder="Search by Cours Name" id="txtSearch" /> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <p>

        </p>
        <br />

    </div>
    <div id="courses">
        <section class="container">
            <div class="row m-0 justify-content-between" id="vodeos_section">
                @forelse ($courses as $course)
                    <div class="col-12 col-md-3 col-lg-3 w-100">
                        <div class="newsBox">
                            <div class="thumbnail">
                                {{-- <figure><img src="images/news2.jpg" alt=""></figure> --}}
                                <video style='width:100%;height:200px' controls autoplay @if(Auth::check()) @else controlsList="nodownload"  @endif>
                                    @if (count($course->videos) > 0)

                                        <source src="{{ asset('storage') }}/videos/{{ $course->videos[0]->video }}"
                                            type="video/mp4">
                                    @endif
                                </video>
                                <div class="caption maxheight2">
                                    <div class="box_inner">
                                        <div class="box">
                                            <p class="title">
                                            <h5>{{ $course->name }}</h5>
                                            </p>
                                            <p>{{ $course->description }}</p>
                                            <a href="{{ route('course.show', $course->id) }}">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h3 class="text-center">no new course yet</h3>
                @endforelse

                

            </div>



        </section>
    </div>

    <!-- container -->

    <!-- /container -->

    <script>
        function filterVideos(e) 
        {
            var videoSection = document.getElementById("vodeos_section");
            var select = document.getElementById("filter_drop_down");
            var selectedStatus = select.value;
            console.log(selectedStatus);
            videoSection.innerHTML = "";
            if(selectedStatus == 'All'){
                videoSection.innerHTML = `
                                        @forelse ($courses as $course)
                                        <div class="col-12 col-md-3 col-lg-3 w-100">
                                            <div class="newsBox">
                                                <div class="thumbnail">
                                                    {{-- <figure><img src="images/news2.jpg" alt=""></figure> --}}
                                                    <video style='width:100%;height:200px' controls autoplay>
                                                        @if (count($course->videos) > 0)

                                                            <source src="{{ asset('storage') }}/videos/{{ $course->videos[0]->video }}"
                                                                type="video/mp4">
                                                        @endif
                                                    </video>
                                                    <div class="caption maxheight2">
                                                        <div class="box_inner">
                                                            <div class="box">
                                                                <p class="title">
                                                                <h5>{{ $course->name }}</h5>
                                                                </p>
                                                                <p>{{ $course->description }}</p>
                                                                <a href="{{ route('course.show', $course->id) }}">Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <h3>no new course yet</h3>
                                    @endforelse
                                    `;
            }
            else{

                videoSection.innerHTML = `
                                        @forelse ($courses as $course)
                                        @if ($course->category->name == '`+selectedStatus+`')
                                        <div class="col-12 col-md-3 col-lg-3 w-100">
                                            <div class="newsBox">
                                                <div class="thumbnail">
                                                    {{-- <figure><img src="images/news2.jpg" alt=""></figure> --}}
                                                    <video style='width:100%;height:200px' controls autoplay>
                                                        @if (count($course->videos) > 0)

                                                            <source src="{{ asset('storage') }}/videos/{{ $course->videos[0]->video }}"
                                                                type="video/mp4">
                                                        @endif
                                                    </video>
                                                    <div class="caption maxheight2">
                                                        <div class="box_inner">
                                                            <div class="box">
                                                                <p class="title">
                                                                <h5>{{ $course->name }}</h5>
                                                                </p>
                                                                <p>{{ $course->description }}</p>
                                                                <a href="{{ route('course.show', $course->id) }}">Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @empty
                                        <h3>no new course yet</h3>
                                    @endforelse
                                    `;
            }
            
            
            
        }
    </script>
@endsection
