@extends('layouts.main')

@section('title', "Contact Us")

@section('contents')

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Checkout Page</h1>
                    <p>You can pay us through JazzCashh account</p>
                </div>
    </header>


	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3 class="section-title">Your Packae</h3>
						<p>
						You have Selected {{$package->name}} Package ! 
						</p>

					@if (\Session::has('success'))
						<div class="alert alert-success">
							<ul>
								<li>{!! \Session::get('success') !!}</li>
							</ul>
						</div>
					@endif
											
						<form class="form-light mt-20" method="POST" role="form" action="{{route('payment.store')}}" enctype="multipart/form-data">
							@csrf
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Price</label>
										<input type="number" class="form-control" placeholder="50" name="ammount" disabled value="{{$package->price}}">
										
										<input type="hidden"  name="package_id" value="{{$package->id}}">
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>JazzCash Phone</label>
										<input type="number" class="form-control" placeholder="03*********" maxlength="11" minlength="11" name="phone" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>JazzCash Pin</label>
										<input type="number" class="form-control" placeholder="xxxx" maxlength="4" minlength="4" name="pin" required>
									</div>
								</div>
							</div>
							
							<button type="submit" class="btn btn-two">Make Payment</button><p><br/></p>
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
