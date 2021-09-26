@extends('layouts.main')

@section('title', "Rate Student")

@section('contents')

		<header id="head" class="secondary">
            <div class="container">
                    <h1>Rate Students</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
                </div>
    </header>

    
    <div class="container">
    	<div class="row">
    	<div class="col-md-2">
    		<h3>Students</h3>
    	</div>
    	<div class="col-md-10">
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
    	</div>
    	</div>
        <p>
            Search students to rate
        </p>
<br/>

</div>



 @endsection
