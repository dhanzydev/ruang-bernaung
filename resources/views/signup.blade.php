@extends('layout.loginlayouts')
@section('page-content')
<img class="wall" src="img/bg_wall.png" />
<div class="container" id="login-container">
    <div class="img">
        <img src="img/bg.svg" />
    </div>
    <div class="login-content">
        {{-- <div class="alert alert-danger alert-dismissible show fade">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div> --}}
        <form action="{{ route('register') }}" method="POST" id="form-login">
            @csrf
            <img src="img/avatar.svg" />
            <h2 class="title">SIGNUP</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="div">
                    <h5>Email</h5>
                    <input type="email" class="input" name="email" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Username</h5>
                    <input type="text" class="input" name="username" />
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input" name="password" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <a href="/login" class="forgot-link">Already have an account?</a>
            <button class="btn btn-custom" type="submit">Sign Up</button>
        </form>
    </div>
</div>

@endsection
