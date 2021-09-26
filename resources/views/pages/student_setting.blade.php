@extends('layouts.main')

@section('title', 'Contact Us')

@section('contents')

    <header id="head" class="secondary">
        <div class="container">
            <h1>User Setting</h1>
            <p>We are here to help you so feel free to contact us</p>
        </div>
    </header>
    <!-- container -->
    <div class="container">
       <div class="row m-0" style="display: flex;justify-content:center;width:100%;">
            <div class="col-md-8" style="padding-top: 30px;width:100%;">
                
                <form class="form-light mt-20" method="POST" role="form" action="{{ route('student_setting.update') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="pro-img">
							<img
							class="imagePreview_prof"
							 src="{{asset('storage')}}/users/{{Auth::user()->profile_image}}" alt="sdhfgs" style="height: 120px;width:120px;border:1px solid black"/>
						</label>
                        <input style="display: none" onchange="imageUpload_prf()" type="file" id="pro-img" class="form-control imageUpload_prf" placeholder="Your Profile Image" name="image" >
                    </div>
					<script>
						function imageUpload_prf() {
						const file = document.querySelector(".imageUpload_prf").files[0];
						if (!file) return;
						const reader = new FileReader();
						reader.readAsDataURL(file);
						reader.onload = function (event) {
							const imgElement = document.createElement("img");
							imgElement.src = event.target.result;
							document.querySelector(".imagePreview_prof").src = event.target.result;
							imgElement.onload = function (e) {
							const canvas = document.createElement("canvas");
							const MAX_WIDTH = 500;
							const scaleSize = MAX_WIDTH / e.target.width;
							canvas.width = MAX_WIDTH;
							canvas.height = e.target.height * scaleSize;
							const ctx = canvas.getContext("2d");
							ctx.drawImage(e.target, 0, 0, canvas.width, canvas.height);
							const srcEncoded = ctx.canvas.toDataURL(e.target, "image/*");
							// you can send srcEncoded to the server
							document.querySelector(".imagePreview_prof").src = srcEncoded;
							};
						};
						}

					</script>
                    <div class="form-group">
                        <label>Current Package : <span>{{Auth::user()->current_package}}</span></label>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Your name" name="name" value="{{Auth::user()->name}}" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email address" name="email" value="{{Auth::user()->email}}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" class="form-control" placeholder="Phone number" name="phone" value="{{Auth::user()->phone}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="date" class="form-control"  name="date_of_birth" value="{{Auth::user()->date_of_birth}}" required>
                    </div>
                    

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password"  >
                    </div>
                    <button type="submit" class="btn btn-two">Update Setting</button>
                    <p><br /></p>
                </form>
            </div>

        </div>
    </div>
    <!-- /container -->
@endsection
