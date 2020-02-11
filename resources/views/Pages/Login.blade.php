@extends('layouts.application')
@section('title','Login')

@section('style')
<link rel="stylesheet" href="{{ asset('frontend/css/login.css') }}" type="text/css">
@stop

@section('content')
<div id="login-page" style="background:#eb525a; height:700px;">
    <div class="container">
      <form class="form-login" action="{{route('Login.custom')}}">
        {{ csrf_field() }}
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="email" class="form-control" placeholder="Email" autofocus required="">
          <br>
          <input type="password" class="form-control" placeholder="Password" required="">
          <label class="">
            <input type="checkbox" value="remember-me"> Remember me
            <br><span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" href="" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
          <div class="login-social-link centered">
            <p>or you can sign in via your social network</p>
            <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
            <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
            <span class="pull-right">
            <p style="text-align:center;"> Haven't an account?
            <a  href="registration">Create one</a></p>
            </span>
          </div>

        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->       
     
        </div>
  </div>
@endsection
@section('script')

@stop