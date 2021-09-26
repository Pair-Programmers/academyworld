@extends('layouts.main')

@section('title', "Home")

@section('contents')

	<!-- Header -->
	<header id="head">
		<div class="fluid_container" >
             <div class="heading-text" style="margin-top: 15%; z-index: 1;" >			
							<h1 class="animated flipInY delay1" >Start Online Education</h1>
              <p>Free Online education template for elearning and online education institute.</p>
						</div>
            
					<div class="fluid_container" >                       
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>

                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="{{asset('images')}}/slides/img1.jpg" alt="...">
                          <div class="carousel-caption">
                            ...
                          </div>
                        </div>
                        <div class="item">
                          <img src="{{asset('images')}}/slides/img2.jpg" alt="...">
                          <div class="carousel-caption">
                            ...
                          </div>
                        </div>
                        <div class="item">
                          <img src="{{asset('images')}}/slides/img3.jpg" alt="...">
                          <div class="carousel-caption">
                            ...
                          </div>
                        </div>
                        ...
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="z-index: 1">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="z-index: 1">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div><!-- .fluid_container -->
		</div>
	</header>
	<!-- /Header -->
  <br><br><br><br><br><br><br>  <br><br><br><br><br><br><br>  <br><br><br><br><br><br><br>

  <div class="container">
    <div class="row">
					<div class="col-md-3">
						<div class="grey-box-icon">
							<div class="icon-box-top grey-box-icon-pos">
								<img src="{{asset('images')}}/1.png" alt="" />
							</div><!--icon box top -->
							<h4>Online Courses</h4>
							<p>The world's largest selection of courses
Choose from 500+ online video courses with new additions published every month</p>
     						<p><a href="#"><em>Read More</em></a></p>
						</div><!--grey box -->
					</div><!--/span3-->
					<div class="col-md-3">
						<div class="grey-box-icon">
							<div class="icon-box-top grey-box-icon-pos">
								<img src="{{asset('images')}}/2.png" alt="" />
							</div><!--icon box top -->
							<h4>Meet our Staff</h4>
							<p>Top instructors from around the world teach millions of students on Udemy. We provide the tools and skills to teach what you love.</p>
     						<p><a href="#"><em>Read More</em></a></p>
						</div><!--grey box -->
					</div><!--/span3-->
					<div class="col-md-3">
						<div class="grey-box-icon">
							<div class="icon-box-top grey-box-icon-pos">
								<img src="{{asset('images')}}/3.png" alt="" />
							</div><!--icon box top -->
							<h4>Latest Updates</h4>
							<p>Join Millions of Learners From Around The World Already Learning On Academy World! Learn Online At Your Own Pace. Start Today With a Special Discount.</p>
     						<p><a href="#"><em>Read More</em></a></p>
						</div><!--grey box -->
					</div><!--/span3-->
					<div class="col-md-3">
						<div class="grey-box-icon">
							<div class="icon-box-top grey-box-icon-pos">
								<img src="{{asset('images')}}/4.png" alt="" />
							</div><!--icon box top -->
							<h4>Placements</h4>
							<p>What you'll learn · Placements can be a cakewalk for students who attend this course. </p>
     						<p><a href="#"><em>Read More →</em></a></p>
						</div><!--grey box -->
					</div><!--/span3-->
				</div>
    </div>
      <section class="news-box top-margin">
        <div class="container">
            <h2><span>New Courses</span></h2>
            <div class="row">
       
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="{{asset('images')}}/news2.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><h5>Developer</h5></p>
                                            <p>It's Never Too Late to Learn a New Skill! Learn to Code and Join Our 45+ Million Users. Enjoy Extra Quizzes & Projects and Exclusive Content. Practice with Our App.</p>
                                        </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="{{asset('images')}}/news3.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><h5>Photography   </h5></p>
                                            <p>
  A Complete Guide to Photography
The Best Online Professional Photography Class: How to Take Amazing Photos for Beginners & Advanced Photographers</p>
                                        </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="{{asset('images')}}/news4.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                           <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><h5>Audio Editing</h5></p>
                                            <p>Learn Audio Editing Online At Your Own Pace. Start Today and Become an Expert in Days. Join Millions of Learners From Around The World Already Learning</p>
                                        </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
  
	
      <section class="container">
      <div class="row">
      	<div class="col-md-8"><div class="title-box clearfix "><h2 class="title-box_primary">About Us</h2></div> 
        <p>We helps organizations of all kinds prepare for the ever-evolving future of work. Our curated collection of top-rated business and technical courses gives companies, governments, and nonprofits the power to develop in-house expertise and satisfy employees’ hunger for learning and development.</p>
        <a href="#" title="read more" class="btn-inline " target="_self">read more</a> </div>
              
          
          <div class="col-md-4"><div class="title-box clearfix "><h2 class="title-box_primary">Up Coming Courses</h2></div> 
            <div class="list styled custom-list">
            <ul>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Mathematics and Computer Science</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Mathematics and Philosophy</a></li>
            <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">Philosophy and Modern Languages</a></li>
            <li><a title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci." href="#">History (Ancient and Modern)</a></li>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Classical Archaeology and Ancient History</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Physics and Philosophy</a></li>
            </ul>
            </div>
         </div>
      </div>
      </section>

    <script>
		jQuery(function(){
			
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