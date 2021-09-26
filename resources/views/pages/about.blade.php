@extends('layouts.main')

@section('title', "About Us")

@section('contents')

 	<header id="head" class="secondary">
            <div class="container-fluid">
                    <h1>About Us</h1>
                    <p>We are here to provide you the best cousres in our country</p>
                </div>
    </header>


    <!-- container -->
    <section class="container">
        <div class="row">
            <div class="col-sm-12">
            <h3>About Us</h3>
        </div>
        <div class="col-sm-12">
            <img src="{{asset('images')}}/about.jpg" alt="" class="img-rounded pull-right" width="300">
        </div>
            <!-- main content -->
            <section class="col-sm-8 maincontent">
       
                <p>
                  
                     We helps organizations of all kinds prepare for the ever-evolving future of work. Our curated collection of top-rated business and technical courses gives companies, governments, and nonprofits the power to develop in-house expertise and satisfy employees’ hunger for learning and development.
                </p>
                <p>Our employees live out our values every day as learners and teachers ourselves. Our culture is diverse, inclusive, and committed to personal and professional development. We’re not afraid to take on a new challenge, and we love taking Udemy courses!</p>
                <h3>Our Achievements</h3>
                <strong>2014</strong>
                <p>Our instructor Beth Payne helps individuals and teams thrive in adversity by providing practical skills and tools she developed over several decades as a US diplomat in challenging environments In 2003, Beth was the US Consul in Iraq Early one October morning a rocket</p>
                <strong>2013</strong>
                <p>We've all experienced the world of work get flipped upside down without warning in 2020 While much of this year has been uncertain, one thing has become undoubtedly clear The future of work that many of us have been talking about is no longer an eventuality</p>
               
            </section>
            <!-- /main -->

            <!-- Sidebar -->
            <aside class="col-sm-4 sidebar sidebar-right">

                <div class="panel">
                    <h4>Latest News</h4>
                    <ul class="list-unstyled list-spaces">
                        <li><a href="">Responsive Design</a><br>
                            <span class="small text-muted">Responsive Web Design is about using HTML and CSS to automatically resize, hide, shrink, or enlarge, a website, to make it look good on all devices (desktops, tablets, and phones)</span></li>
                        <li><a href="">HTML5, CSS3 and JavaScript</a><br>
                            <span class="small text-muted">This course takes a deep dive into technologies like HTML5, CSS3, JavaScript and jQuery. We're unleashing our creativity and building a minimalistic website, while learning and following modern web development trends that you'll be able to apply into your future projects.</span></li>
                        <li><a href="">Bootstrap</a><br>
                            <span class="small text-muted">Looking to quickly add Bootstrap to your project? Use jsDelivr, a free open source CDN. Using a package manager or need to download the source files?</span></li>
                        <li><a href="">Clean Template</a><br>
                            <span class="small text-muted">Our Clean Intro Maker contains 4 video templates that match the keyword CLEAN. Each video template on IntroCave has a title, a description, and keywords.</span></li>
                        <li><a href="">Premium Quality</a><br>
                            <span class="small text-muted">Find & Download Free Graphic Resources for Premium Quality. 14000+ Vectors, Stock Photos & PSD files.</span></li>
                    </ul>
                </div>

            </aside>
            <!-- /Sidebar -->

        </div>
    </section>
    <!-- /container -->
    <section class="team-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Our Team</h3>
                    <p>Technical teams rely on AcademyWorl for Business to upskill across critical topics like Artificial Intelligence, Machine Learning, Deep Learning, AWS, and more. With 33,500+ hours of always-evolving tech skill courses taught by top global instructors, your team will be ready for whatever comes next – whether that's tackling the next project, learning a new skill, or mastering a role.

</p>
                    <br />
                </div>
            </div>
            <div class="row">

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="{{asset('images')}}/Abdul qayyom.jpeg" alt="">
                        </div>
                        <!-- Member Details -->
                        <h4>Abdul Qayyom</h4>
                        <!-- Designation -->
                        <span class="pos">CEO</span>
                        <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="{{asset('images')}}/Muhammad Qasim Ali.jpeg" alt="">
                        </div>
                        <!-- Member Details -->
                        <h4>Muhammad Qasim Ali</h4>
                        <!-- Designation -->
                        <span class="pos">Director</span>
                        <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                            <img class="img-responsive" src="{{asset('images')}}/Tasneem Ahmad.jpeg" alt="">
                        </div>
                        <!-- Member Details -->
                        <h4>Tasneem Ahmad</h4>
                        <!-- Designation -->
                        <span class="pos">Manager</span>
                        <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <!-- Team Member -->
                    <div class="team-member pDark">
                        <!-- Image Hover Block -->
                        <div class="member-img">
                            <!-- Image  -->
                           <img class="img-responsive" src="{{asset('images')}}/Muhammad Qasim Ali.jpeg" alt="">
                        </div>
                        <!-- Member Details -->
                        <h4>Hassan Shabbir</h4>
                        <!-- Designation -->
                        <span class="pos">Creative</span>
                        <div class="team-socials">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
