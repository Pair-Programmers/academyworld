@extends('layouts.main')

@section('title', "Price")

@section('contents')

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Our Price</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
                </div>
    </header>


	<!-- container -->
	<div class="container">
		<div class="row">
			<!-- Article content -->
			<section class="col-sm-12 maincontent">
				<h3>Cost</h3>
				<p>
					Learn Pricing Online At Your Own Pace. Start Today and Become an Expert in Days. Join Millions of Learners From Around The World Already Learning On AcademyWorld! Courses in 60+ Languages. Expert Instructors. Download To Your Phone. Over 500+ Courses.
				</p>

			</section>
		</div>
	</div>
	<!-- /container -->

	<section class="container">
		<div class="heading">
			<!-- Heading -->
			<h3>Range</h3>
			<p>We are providing high quality cousrse in short and affordable range as well as free courses for some students</p>
			<br />
		</div>
		<div class="row flat">
			<div class="col-lg-3 col-md-3 col-xs-6">
				<ul class="plan plan1">
					<li class="plan-name">Free
					</li>
					<li class="plan-price">
						<strong>RS 0</strong> Fee
					</li>
					<li>
						<strong>∞</strong> Watch Tutorials
					</li>
					<li>
						<strong>∞</strong> Download Free Course
					</li>
					<li>
						<strong>0</strong> Tutor 
					</li>
					
					<li class="plan-action">
						<a href="{{route('login')}}" class="btn">Signup</a>
					</li>
				</ul>
			</div>

			<div class="col-lg-3 col-md-3 col-xs-6">
				<ul class="plan plan2 featured">
					<li class="plan-name">Basic
					</li>
					<li class="plan-price">
						<strong>RS 500</strong> Fee
					</li>
					<li>
						<strong>∞</strong> Watch Tutorials
					</li>
					<li>
						<strong>∞</strong> Download Course
					</li>
					<li>
						<strong>5</strong> Tutors
					</li>
					
					<li class="plan-action">
						<a href="{{route('payment.create', 2)}}" class="btn">Buy Now</a>
					</li>
				</ul>
			</div>

			<div class="col-lg-3 col-md-3 col-xs-6">
				<ul class="plan plan3">
					<li class="plan-name">Standard
					</li>
					<li class="plan-price">
						<strong>RS 1000</strong> Fee
					</li>
					<li>
						<strong>∞</strong> Watch Tutorials
					</li>
					<li>
						<strong>∞</strong> Download Free Course
					</li>
					<li>
						<strong>10</strong> Tutors
					</li>
					
					<li class="plan-action">
						<a href="{{route('payment.create', 3)}}" class="btn">Buy Now</a>
					</li>
				</ul>
			</div>

			<div class="col-lg-3 col-md-3 col-xs-6">
				<ul class="plan plan4">
					<li class="plan-name">Premium
					</li>
					<li class="plan-price">
						<strong>RS 1500</strong> Fee
					</li>
					<li>
						<strong>∞</strong> Watch Tutorials
					</li>
					<li>
						<strong>∞</strong> Download Free Course
					</li>
					<li>
						<strong>∞</strong> Tutors
					</li>
					
					<li class="plan-action">
						<a href="{{route('payment.create', 4)}}" class="btn">Buy Now</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
@endsection
