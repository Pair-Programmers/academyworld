    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="{{route('index')}}">
                    <img src="{{asset('images')}}/logo.png" alt="Techro HTML5 template"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right mainNav">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="about">About</a></li>
                   	<li><a href="{{route('website.course.index')}}">Courses</a></li>
                    <li><a href="{{route('website.teacher.index')}}">Tutors</a></li>
					<li><a href="{{route('show_packages')}}">Price</a></li>
					<li><a href="{{route('course.videos')}}">Videos</a></li>
                    <li><a href="{{route('contact_us.create')}}">Contact</a></li>

                    @if(Auth::check())
                    <li class="dropdown">
                        <a href="#" id="profile-drop-down" class="dropdown-toggle" data-toggle="dropdown">Profile <b class="caret"></b></a>
                        <ul class="dropdown-menu" id="dropdown" style="display:none;">
                            @if(Auth::user()->type == 'Tutor') 
                                <li><a href="{{route('session.index')}}">Sesion Request</a></li>
                                <li><a href="{{route('chat.index')}}">Chat</a></li>
                                <li><a href="{{route('teacher_setting.create')}}">User Setting</a></li>
                            @elseif(Auth::user()->type == 'Student')
                                <li><a href="{{route('chat.index')}}">Chat</a></li>
                                <li><a href="{{route('student_setting.create')}}">User Setting</a></li>
                            @endif
                            
                            <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a></li>
                        </ul>
                    </li>
                    @else
                    <li><a href="{{route('login')}}">Sign in</a></li>
                    <li><a href="{{route('register')}}">Sign up</a></li>
                    @endif
                    
                    
                </ul>
            </div>
            <!--/.nav-collapse -->
            <script>
            let count=0;
                $('#profile-drop-down').on('click',()=>{
                    if(count == 0){
                        count++;
                        $('#dropdown').fadeIn(100);
                    }
                    else{
                        count=0;
                        $('#dropdown').fadeOut(10);
                    }
                })
            </script>
        </div>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <!-- /.navbar -->