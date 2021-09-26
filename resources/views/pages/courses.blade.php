@extends('layouts.main')

@section('title', 'Courses')

@section('contents')

    <header id="head" class="secondary">
        <div class="container">
            <h1>Courses</h1>
            <p>We are here to provide you the best cousres in our country, join us and choose a course</p>
        </div>
    </header>


    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h3>Courses</h3>
            </div>
            <div class="col-md-10">
                <form action="{{ route('course.search') }}" method="Post">
                    @csrf
                    <div class="col-md-10">
                        <br>
                        <div class="input-group">
                            <input type="text" name="search_text" class="form-control" value="{{old('search_text')}}" placeholder="Search by Cours Name" id="txtSearch" />
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
        <br />

    </div>
    <div id="courses">
        <section class="container">
            <h3>All Course</h3>
            <div class="row m-0 justify-content-between">
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
                    <h3>no new course yet</h3>
                @endforelse
				
            </div>



        </section>
    </div>

    <!-- container -->
    <div class="container">
        <div class="row">
            <!-- Article content -->
            <section class="col-sm-12 maincontent">
                <h3>Responsive Website</h3>
                <p>
                    HTML Responsive Web Design ... Responsive web design is about creating web pages that look good on all
                    devices! A responsive web design will automatically
                </p>
                <h3>Bootstrap</h3>
                <p>Looking to quickly add Bootstrap to your project? Use jsDelivr, a free open source CDN. Using a package
                    manager or need to download the source files?</p>
            </section>
        </div>
    </div>
    <!-- /container -->
@endsection
