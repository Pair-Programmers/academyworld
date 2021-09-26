@extends('layouts.main')

@section('title', "Home")

@section('contents')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Demo styles -->
<style>
html,
body {
    position: relative;
    height: 100%;
}

.swiper-container {
    width: 100%;
    height: 91.4vh;
}
.container-fluid {
    padding: 0px !important;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
}

.swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    /* object-fit: cover; */
}

.text-start {
    font-weight: 600;
    font-size: 50px;
    top: 35%;
}

.text-free {
    top: 50%;
    font-size: 30px;
}

.text-start,
.text-free {
    position: absolute;
    color: #fff;
}

@media screen and (max-width:769px) {
    .text-start {
        font-weight: 600;
        font-size: 20px;
        top: 40%;
    }

    .text-free {
        top: 50%;
        font-size: 17px;
    }

    .swiper-container {
        width: 100%;
        height: 90vh;
    }
}
@media screen and (max-height:601px) {
    .text-start {
        top: 30%;
    }

    .text-free {
        top: 50%;
    }
}
</style>
<!-- Header -->

<div class="swiper-container mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <h1 class="text-start">Start Online Education</h1>
            <p class="text-free">Free Online education template for elearning and online education institute.</p>
            <img src="{{asset('images')}}/slides/img1.jpg" alt="...">
        </div>
        <div class="swiper-slide">
            <h1 class="text-start">Start Online Education</h1>
            <p class="text-free">Free Online education template for elearning and online education institute.</p>
            <img src="{{asset('images')}}/slides/img2.jpg" alt="...">
        </div>
        <div class="swiper-slide">
            <h1 class="text-start">Start Online Education</h1>
            <p class="text-free">Free Online education template for elearning and online education institute.</p>
            <img src="{{asset('images')}}/slides/img3.jpg" alt="...">
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
</script>
<!-- /Header -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="grey-box-icon">
                <div class="icon-box-top grey-box-icon-pos">
                    <img src="{{asset('images')}}/1.png" alt="" />
                </div>
                <!--icon box top -->
                <h4>Online Courses</h4>
                <p>The world's largest selection of courses
                    Choose from 500+ online video courses with new additions published every month</p>
                {{-- <p><a href="#"><em>Read More</em></a></p> --}}
            </div>
            <!--grey box -->
        </div>
        <!--/span3-->
        <div class="col-md-3">
            <div class="grey-box-icon">
                <div class="icon-box-top grey-box-icon-pos">
                    <img src="{{asset('images')}}/2.png" alt="" />
                </div>
                <!--icon box top -->
                <h4>Meet our Staff</h4>
                <p>Top instructors from around the world teach millions of students on Udemy. We provide the tools and
                    skills to teach what you love.</p>
                {{-- <p><a href="#"><em>Read More</em></a></p> --}}
            </div>
            <!--grey box -->
        </div>
        <!--/span3-->
        <div class="col-md-3">
            <div class="grey-box-icon">
                <div class="icon-box-top grey-box-icon-pos">
                    <img src="{{asset('images')}}/3.png" alt="" />
                </div>
                <!--icon box top -->
                <h4>Latest Updates</h4>
                <p>Join Millions of Learners From Around The World Already Learning On Academy World! Learn Online At
                    Your Own Pace. Start Today With a Special Discount.</p>
                {{-- <p><a href="#"><em>Read More</em></a></p> --}}
            </div>
            <!--grey box -->
        </div>
        <!--/span3-->
        <div class="col-md-3">
            <div class="grey-box-icon">
                <div class="icon-box-top grey-box-icon-pos">
                    <img src="{{asset('images')}}/4.png" alt="" />
                </div>
                <!--icon box top -->
                <h4>Placements</h4>
                <p>What you'll learn · Placements can be a cakewalk for students who attend this course. </p>
                {{-- <p><a href="#"><em>Read More →</em></a></p> --}}
            </div>
            <!--grey box -->
        </div>
        <!--/span3-->
    </div>
</div>
<section class="news-box top-margin">
    <div class="container">
        <h2><span>Latest Courses</span></h2>
        <div class="row">

            @forelse ($courses as $course)
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="newsBox">
                    <div class="thumbnail">
                        {{-- <figure><img src="images/news2.jpg" alt=""></figure> --}}
                        <vi deo style='width:320px;height:240px' controls autoplay @if(Auth::check()) @else controlsList="nodownload"  @endif>
                            @if(count($course->videos)>0)

                            <source src="{{asset('storage')}}/videos/{{$course->videos[0]->video}}" type="video/mp4">
                            @endif
                        </video>
                        <div class="caption maxheight2">
                            <div class="box_inner">
                                <div class="box">
                                    <p class="title">
                                    <h5>{{$course->name}}</h5>
                                    </p>
                                    <p>{{$course->description}}</p>
                                    <a href="{{route('course.show', $course->id)}}">Details</a>
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
    </div>
</section>



<section class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="title-box clearfix ">
                <h2 class="title-box_primary">About Us</h2>
            </div>
            <p>We helps organizations of all kinds prepare for the ever-evolving future of work. Our curated collection
                of top-rated business and technical courses gives companies, governments, and nonprofits the power to
                develop in-house expertise and satisfy employees’ hunger for learning and development.</p>
            <a href="#" title="read more" class="btn-inline " target="_self">read more</a>
        </div>


        <div class="col-md-4">
            <div class="title-box clearfix ">
                <h2 class="title-box_primary">Free Courses</h2>
            </div>
            <div class="list styled custom-list">
                <ul>
                    @foreach ($free_courses as $course)
                    <li><a title="{{$course->description}}"
                        href="{{route('course.show', $course->id)}}">{{$course->name}}</a></li>
                    @endforeach
                   
                   
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
jQuery(function() {

    jQuery('#camera_wrap_4').camera({
        transPeriod: 500,
        time: 3000,
        height: '600',
        loader: 'false',
        pagination: true,
        thumbnails: false,
        hover: false,
        playPause: false,
        navigation: false,
        opacityOnGrid: false,
        imagePath: 'images/'
    });

});
</script>

@endsection