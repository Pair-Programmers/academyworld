@extends('layouts.main')

@section('title', "Edit Profile")

@section('contents')

<header id="head" class="secondary">
  <div style="float: right; margin-top: 2.5%; margin-right: 2.5%;">
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Settings
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="editProfile">Edit Profile</a></li>
        <li><a href="tutor">Search Tutor</a></li>
        <li><a href="courses">Search Course</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Logout</a></li>
      </ul>
    </div>
  </div>
  <div class="container">
      <h1>Edit Profile</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
  </div>
</header>
	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3 class="section-title">About</h3>
						<p>
						Lorem Ipsum is inting and typesetting in simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the is dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
						
						<form class="form-light mt-20" role="form">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>First Name</label>
								<input type="text" class="form-control" placeholder="First name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Last Name</label>
								<input type="text" class="form-control" placeholder="Last name">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" placeholder="Email address">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone</label>
										<input type="text" class="form-control" placeholder="Phone number">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Age</label>
										<input type="text" class="form-control" placeholder="DD/MM/YY">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" id="message" placeholder="Write you message here..." style="height:100px;"></textarea>
							</div>
							<button type="submit" class="btn btn-two">Update</button><p><br/></p>
						</form>
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<h3 class="section-title">Profile Picture</h3>
								<div class="contact-info">
									<img src="{{asset('img')}}/avatar5.png">
									<br><br>
									<form action="/action_page.php">
									  <input type="file" id="myFile" name="filename"><br>
									  <input type="submit">
									</form>
								</div>
							</div> 
						</div> 						
					</div>
				</div>
			</div>
	<!-- /container -->
@endsection
