@extends('layout.loginlayouts')
@section('page-content')
<img class="wall" src="img/bg_wall.png" />
<div class="container" id="login-container">
    <div class="img">
        <img src="img/bg.svg" />
    </div>
    <div class="login-content">
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible show fade">
            <ul>
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <form action="{{ route('login') }}" method="POST" id="form-login">
            @csrf
            <img src="img/avatar.svg" />
            <h2 class="title">Welcome</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Username</h5>
                    <input type="text" name="username" class="input" />
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Password</h5>
                    <input type="password" name="password" class="input" />
                </div>
            </div>
            <a href="/forgot" class="forgot-link">Forgot Password?</a>
            <button class="btn btn-custom" type="submit">Login</button>
        </form>
    </div>
</div>

@endsection
