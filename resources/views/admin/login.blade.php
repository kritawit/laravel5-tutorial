@extends('layouts/login_tmp')

@section('content')
<div class="login-logo">
      <a href="#"><b>Admin</b>LTE</a>
      @if(Session::has('message'))
      <div class="panel-body bg-danger color-red">
        <h4>{{Session::get('message')}}</h4>
      </div>
      @endif
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="{{ url('/admin/login/process') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group has-feedback">
            <input type="email" name="username" class="form-control" value="{{old('username')}}" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {!!$errors->first('username', '<span
 class="control-label color-red" for="username">*:message</span>')!!}
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            {!!$errors->first('password', '<span
 class="control-label error" for="password">*:message</span>')!!}
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a>

      </div><!-- /.login-box-body -->
@endsection