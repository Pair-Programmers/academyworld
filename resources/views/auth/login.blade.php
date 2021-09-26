@extends('layouts.main')

@section('title', "Tutor")

@section('contents')



<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue</h1>
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
                <form method="POST" action="{{ route('login') }}" class="form-signin">
                @csrf
                <input type="email"  class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" required autofocus><br>
                
                <input id="password" name="password" type="password"  class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                </form>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                
            </div>
            <a href="{{ route('register') }}" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>

 @endsection

