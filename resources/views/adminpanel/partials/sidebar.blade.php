<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{asset('adminpanel')}}/img/admin_profile.jpg" style="width: 70px; height: 70px" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">AcademyWorld</strong>
                             </span> <span class="text-muted text-xs block">Admin<b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                {{-- <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li> --}}
                                <li class="divider"></li>
                                <li><a href="{{route('admin_logout')}}">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            A-W
                        </div>
                    </li>
                    <li >
                        <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                        
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Course Management</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{route('course.create')}}">Create</a></li>
                            <li><a href="{{route('course.index')}}">List</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Course Category</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{route('category.index')}}">Create</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">File/Doc Management</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{route('file.create')}}">Create</a></li>
                            <li><a href="{{route('file.index')}}">List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Video Management</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{route('video.create')}}">Create</a></li>
                            <li><a href="{{route('video.index')}}">List</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{route('contact_us.index')}}"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Contact Us List</span><span class="fa arrow"></span></a>
                        
                    </li>

                    <li>
                        <a href="{{route('user.index')}}"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Users</span><span class="fa arrow"></span></a>
                        
                    </li>
                    
                    

                    
                </ul>

            </div>
        </nav>