<footer id="footer">
		<div class="container">
   <div class="row">
  <div class="footerbottom">
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Course Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            @foreach (\DB::table('categories')->paginate(5) as $category)
            <li><a href="{{route('course.categories', $category->id)}}">
              {{$category->name}}
              </a>
            </li> 
            @endforeach
            
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        <h4>
          Top Tutors
        </h4>
        <div class="menu-course">
          <ul class="menu">
            @foreach (\DB::table('users')->where('type', 'Tutor')->orderby('rating', 'DESC')->paginate(5) as $tutor)
            <li><a href="{{route('teacher.show', $tutor->id)}}">
              {{$tutor->name}}
              </a>
            </li> 
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6">
      <div class="footerwidget">
        {{-- <h4>
          Browse by Categories
        </h4>
        <div class="menu-course">
          <ul class="menu">
            <li><a href="#">
                All Courses
              </a>
            </li>
            <li> <a href="#">
                All Instructors
              </a>
            </li>
            <li><a href="#">
                All Members
              </a>
            </li>
            <li>
              <a href="#">
                All Groups
              </a>
            </li>
          </ul>
        </div> --}}
      </div>
    </div>
    <div class="col-md-3 col-sm-6"> 
            	<div class="footerwidget"> 
                         <h4>Contact</h4> 
                        <p>Lorem reksi this dummy text unde omnis iste natus error sit volupum</p>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> Kerniles 416  - United Kingdom<br>
            <i class="fa fa-phone"></i>+00 123 156 711 <br>
             <i class="fa fa-envelope-o"></i> youremail@email.com
              </div> 
                </div><!-- end widget --> 
    </div>
  </div>
</div>
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="{{route('index')}}">Home</a> | 
								<a href="about">About</a> |
								<a href="{{route('website.course.index')}}">Courses</a> |
								<a href="{{route('website.teacher.index')}}">Tutors</a> |
								<a href="price">Price</a> |
								<a href="{{route('course.videos')}}">Videos</a> |
								<a href="{{route('contact_us.create')}}">Contact</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2021. AcademyWorld<a href="http://webthemez.com/" rel="develop">academyworld.com</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>

	</footer>

         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.cslider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fancybox/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr-latest.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.mobile.customized.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/camera.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
