@extends('layouts.main')

@section('title', "coursedetails")

@section('contents')

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Course Detail, Videos & Files</h1>
                    <p>We are here to provide you the best cousres in our country, join us and choose a course</p>
                </div>
    </header>

<style>



.box {
  /* box-shadow: 0 3px 12px rgba(0,0,0,0.15); */
  background-color: #fff;
  border-radius: 3px;
  overflow: hidden;
}

.tab-list {
  margin-left:25%;
  padding: 0;
  list-style: none;
  display: flex;
  position: relative;
}

/* tab list 會動的底線 */
.tab-list::before {
  content: '';
  display: block;
  height: 2px;
  width: 33.333%;
  position: absolute;
  bottom: 0;
  background-color: #aaa;
  transition: .3s;
}

.tab-item {
    width: 35%;
  text-align: left;
  transition: .3s;
  opacity: 0.5;
}

.tab-toggle {
  display: none;
}

.tab-content {
  display: none;
}

.tab-toggle:nth-child(1):checked ~ .tab-list .tab-item:nth-child(1),
.tab-toggle:nth-child(2):checked ~ .tab-list .tab-item:nth-child(2), 
.tab-toggle:nth-child(3):checked ~ .tab-list .tab-item:nth-child(3) {
  opacity: 1;
}

/* tab bar 底線位移控制 */
.tab-toggle:nth-child(2):checked ~ .tab-list::before {
  transform: translateX(100%);
}

.tab-toggle:nth-child(3):checked ~ .tab-list::before {
  transform: translateX(300%);
}

/* 內容顯示控制 */
.tab-toggle:nth-child(1):checked ~ .tab-container .tab-content:nth-child(1),
.tab-toggle:nth-child(2):checked ~ .tab-container .tab-content:nth-child(2),
.tab-toggle:nth-child(3):checked ~ .tab-container .tab-content:nth-child(3) {
  display: block;
}

.tab-trigger {
  display: block;
  padding: 10px 0;
}

.tab-container {
  padding: 15px 30px;
}

</style>
    
    <div class="container">
    	<div class="row">
    	<div class="col-md-12">
    		<h3>{{$course->name}}</h3>
        <p>{{$course->description}}</p>
        <div>Total Videos : {{count($course->videos)}}</div><div>Total Pdf Doc : {{count($course->files)}}</div>
        <div>Subscription Level : {{$course->package->name}}</div>
    	</div>
    	<!-- <div class="col-md-10">
			<form action="/hms/accommodations" method="GET"> 
			    <div class="col-xs-6 col-md-10">
			    	<br>
			      <div class="input-group">
			        <input type="text" class="form-control" placeholder="Search" id="txtSearch"/>
			        <div class="input-group-btn">
			          <button class="btn btn-primary" type="submit">
			            <span class="glyphicon glyphicon-search"></span>
			          </button>
			        </div>
			      </div>
			  </div>
			</form>
    	</div> -->
    	</div>
<p>
   
</p>
<br/>

<div class="container">
  <div class="box">
    <input type="radio" class="tab-toggle" name="tab-toggle" id="tab1" checked>
    <input type="radio" class="tab-toggle" name="tab-toggle" id="tab2">
    <!-- <input type="radio" class="tab-toggle" name="tab-toggle" id="tab3"> -->

    <ul class="tab-list">
      <li class="tab-item">
        <label class="tab-trigger" for="tab1">Videos</label>
      </li>
      <li class="tab-item">
        <label class="tab-trigger" for="tab2">Files</label>
      </li>
      <!-- <li class="tab-item">
        <label class="tab-trigger" for="tab3">Tab3</label>
      </li> -->
    </ul>
    
    <div class="tab-container">
      <div class="tab-content">
      <section class="news-box top-margin">
        <div class="container">
            <h2><span>Videos</span></h2>
            <div class="row">
       
              @foreach ($course->videos as $video)
                  <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="caption maxheight2">
                      <div class="box_inner">
                                  <div class="box m-0">
                                      <p class="title"><h5>{{$video->name}}</h5></p>
                                  </div> 
                          </div>
                      </div>
                              <div class="newsBox">
                                  <div class="thumbnail">
                      <video

                      @if(Auth::check())
                        @if($course->package->name == 'Basic')
                          @if(Auth::user()->current_package == 'Basic' || Auth::user()->current_package == 'Standard' || Auth::user()->current_package == 'Premium')
                          @else
                          controlsList="nodownload" 
                          @endif
                        @elseif($course->package->name == 'Standard')
                          @if(Auth::user()->current_package == 'Standard' || Auth::user()->current_package == 'Premium')
                          @else
                          controlsList="nodownload"
                          @endif
                        @elseif($course->package->name == 'Premium')
                          @if(Auth::user()->current_package == 'Premium')
                          @else
                          controlsList="nodownload"
                          @endif
                        @endif
                      @else
                      controlsList="nodownload"
                      @endif
                       
                       style='width:320px;height:240px' controls autoplay>
                      <source  src="{{asset('storage')}}/videos/{{$video->video}}" type="video/mp4">
                      </video>
                      <p>{{$video->name}} : {{$video->video}}</p>
                                  <p>{{$video->description}}</p>
                          </div>
                      </div>
                  </div>
            @endforeach

       
            
                
            </div>
        </div>
    </section>

</div>
<div class="tab-content"><table class="table">
  <h2><span>Files</span></h2>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">File Name</th>
      <th scope="col">Descritption</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
      

      @php
        $counter = 1;
      @endphp
      @foreach ($course->files as $file)
          
      
    <tr>
      <th scope="row">{{$counter}}</th>
      <td>{{$file->name}}</td>
      <td>{{$file->document}}</td>
      <td>{{$file->description}}</td>
      @if(Auth::check())
        @if($course->package->name == 'Free')
          <td><a href="{{asset('storage')}}/documents/{{$file->document}}" download>Download Now</a></td>
        @elseif($course->package->name == 'Basic')
          @if(Auth::user()->current_package == 'Basic')
          <td><a href="{{asset('storage')}}/documents/{{$file->document}}" @if(Auth::user()->current_package == 'Basic') download @endif >Download Now</a></td>
          @else
          <td><a>Download Now</a></td>
          @endif
        @elseif($course->package->name == 'Standard')
          @if(Auth::user()->current_package == 'Standard' || Auth::user()->current_package == 'Basic')
          <td><a href="{{asset('storage')}}/documents/{{$file->document}}" @if(Auth::user()->current_package == 'Standard' || Auth::user()->current_package == 'Basic') download @endif >Download Now</a></td>
          @else
          <td><a>Download Now</a></td>
          @endif
        @elseif($course->package->name == 'Premium')
          @if(Auth::user()->current_package == 'Premium' || Auth::user()->current_package == 'Standard' || Auth::user()->current_package == 'Basic')
          <td><a href="{{asset('storage')}}/documents/{{$file->document}}" @if(Auth::user()->current_package == 'Standard' || Auth::user()->current_package == 'Basic' || Auth::user()->current_package == 'Premium') download @endif >Download Now</a></td>
          @else
          <td><a>Download Now</a></td>
          @endif
        @endif
      @else
      <td><a>Download Now</a></td>
      @endif
    </tr>
    @php
      $counter = $counter + 1;
    @endphp
    @endforeach
  </tbody>
</table></div>
      </div>
    </div>
  </div>
</div>

	<!-- container -->
	<div class="container">
		<div class="row">
			<!-- Article content -->
			<section class="col-sm-12 maincontent">
				<h3>Responsive Website</h3>
				<p>
					HTML Responsive Web Design ... Responsive web design is about creating web pages that look good on all devices! A responsive web design will automatically
				</p>
				<h3>Bootstrap</h3>
				<p>Looking to quickly add Bootstrap to your project? Use jsDelivr, a free open source CDN. Using a package manager or need to download the source files?</p>
			</section>
		</div>
	</div>
	<!-- /container -->
 @endsection
