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
      <h2 class="title">SIGNUP</h2>
      <div class="input-div one">
        <div class="i">
          <i class="fas fa-envelope"></i>
        </div>
        <div class="div">
          <h5>Email</h5>
          <input type="email" class="input" name="nama" />
        </div>
      </div>
      <div class="input-div one">
        <div class="i">
          <i class="fas fa-user"></i>
        </div>
        <div class="div">
          <h5>Username</h5>
          <input type="text" class="input" name="username" />
        </div>
      </div>
      <div class="input-div pass">
        <div class="i">
          <i class="fas fa-lock"></i>
        </div>
        <div class="div">
          <h5>Password</h5>
          <input type="password" class="input" name="password" />
        </div>
      </div>
      <a href="/login" class="forgot-link">Already have an account?</a>
      <form action="dashboard.html">
        <input type="submit" value="Signup" class="btn btn-custom" />
      </form>
    </form>
  </div>
</div>
    
@endsection