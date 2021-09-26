@extends('layouts.main')

@section('title', "Contact Us")

@section('contents')

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Contact Us</h1>
                    <p>We are here to help you so feel free to contact us</p>
                </div>
    </header>


	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3 class="section-title">Your Message</h3>
						<p>
						your messages are importatnt to us so our team is work 24 hours to response your queries. so if you have any problem you can just send a message in single click. 
						</p>
						
						<form class="form-light mt-20" method="POST" role="form" action="{{route('contact_us.store')}}" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" placeholder="Your name" name="name" required>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Email</label>
										<input type="email" class="form-control" placeholder="Email address" name="email" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Phone</label>
										<input type="number" class="form-control" placeholder="Phone number" name="phone" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Subject</label>
								<input type="text" class="form-control" placeholder="Subject" name="subject" required>
							</div>
							<div class="form-group">
								<label>Message</label>
								<textarea class="form-control" id="message" placeholder="Write you message here..." style="height:100px;" name="message" required></textarea>
							</div>
							<button type="submit" class="btn btn-two">Send message</button><p><br/></p>
						</form>
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<h3 class="section-title">Office Address</h3>
								<div class="contact-info">
									<h5>Address</h5>
									<p>5th Street, Carl View - United States</p>
									
									<h5>Email</h5>
									<p>info@webthemez.com</p>
									
									<h5>Phone</h5>
									<p>+09 123 1234 123</p>
								</div>
							</div> 
						</div> 						
					</div>
				</div>
			</div>
	<!-- /container -->
@endsection
