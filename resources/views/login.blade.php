@extends('layout.loginlayouts')
@section('page-content')
<img class="wall" src="img/bg_wall.png" />
<div class="container" id="login-container">
  <div class="img">
    <img src="img/bg.svg" />
  </div>
  <div class="login-content">
    <form action="/dashboard" id="form-login">
      <img src="img/avatar.svg" />
      <h2 class="title">Welcome</h2>
      <div class="input-div one">
        <div class="i">
          <i class="fas fa-user"></i>
        </div>
        <div class="div">
          <h5>Username</h5>
          <input type="text" class="input" />
        </div>
      </div>
      <div class="input-div pass">
        <div class="i">
          <i class="fas fa-lock"></i>
        </div>
        <div class="div">
          <h5>Password</h5>
          <input type="password" class="input" />
        </div>
      </div>
      <a href="/forgot" class="forgot-link">Forgot Password?</a>
      <form action="dashboard.html">
        <input type="submit" value="Login" class="btn btn-custom" />
      </form>
    </form>
  </div>
</div>
    
@endsection