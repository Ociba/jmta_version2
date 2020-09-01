{{--
@include('layouts.css')
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body">
    <h3 class="login-box-msg">Sign In</h3>
    <form method="POST" action="{{ route('login') }}">
     @csrf
      <div class="form-group has-feedback">
      <label for="email" class="col-form-label">{{ __('email') }}</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
      @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
      @enderror
      </div>
      <div class="form-group has-feedback">
      <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div>
        <div class="col-xs-8">
          <div class="checkbox icheck">
          <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label>
              Remember Me </label>
              @if (Route::has('password.request'))
                 <a href="{{ route('password.request') }}" class="pull-right"><i class="fa fa-lock"></i> Forgot pwd?</a> 
              @endif
        </div>
        </div> 
      </div>
      <div class="col-xs-4 m-t-1">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
    </form>
    
    <div class="m-t-2">Don't have an account? <a href="{{ route('register') }}" class="text-center">Sign Up</a></div>
  </div>
  <!-- /.login-box-body --> 
</div>
--}}
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>John Mulinde Trumpet Academy</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('login_css/plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('login_css/css/css/bootstrap.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('login_css/css/ionicons.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('login_css/css/adminlte.min.css')}}">
  <link href="{{asset('admin_pages/css/login.css')}}" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background:url(../img/body-bg.jpg) no-repeat center top; background-size:cover;">
<div class="login-box">
  <div class="login-logo">
    <img src="{{asset('admin_pages/images/logo.jpg')}}" style="height:50px; width:50px; border-radius:50%;">
    <a href="#"><b><span style="color:white;">JOHN MULINDE TRUMPET ACADEMY</span></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Enter Your Sign in Details</p>

      <form method="POST" action="{{ route('login') }}">
       @csrf
        <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span><i class="fas fa-envelope"></i></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="icheck-primary">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label>
              Remember Me </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-6">
              @if (Route::has('password.request'))
                 <a href="{{ route('password.request') }}" class="pull-right"><i class="fa fa-lock"></i> Forgot Password?</a> 
              @endif
          </div>
          <!-- /.col -->
        </div>
        <p class="mb-1">
        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </p>
      </form>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center"><span style="color:black">Don't have an account?</span> Sign Up</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</body>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</html>
