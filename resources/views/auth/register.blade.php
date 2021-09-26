@extends('layouts.main')

@section('title', "Tutor")

@section('contents')



<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign up to continue</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <form method="POST" class="form-signin" action="{{ route('register') }}">
                @csrf
                <select class="form-control" name="type" required>
                    <option value="Student" >Student</option>
                    <option value="Tutor" >Tutor</option>
                </select><br>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Full Name" required autofocus><br>
                <input type="number" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="Phone Number" required ><br>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required ><br>
                <input type="password" name="password"  class="form-control" placeholder="Password" required >
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required >
                <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}" class="form-control" placeholder="Birth Date" required ><br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Register</button>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="{{route('login')}}" class="text-center new-account">Already have an account? </a>
        </div>
    </div>
</div>
                    
 @endsection

