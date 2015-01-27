<!DOCTYPE html>
<html class="bg-black">
  <head>
    <meta charset="UTF-8">
    <title>HaiyanUbills | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ URL::asset('assets/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/AdminLTE/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="bg-black">
    <div class="form-box" id="login-box">
      <div class="header">Sign In</div>
      {{ Form::open(array('url' => 'login')) }}
      <div class="body bg-gray">
        <div class="form-group">
          <input type="text" name="login-username" id="login-username" class="form-control" placeholder="Enter username"/>
        </div>
        <div class="form-group">
          <input type="password" name="login-password" id="login-password" class="form-control" placeholder="Enter password"/>
        </div>
        <div class="form-group">
          <input type="checkbox" name="remember-me" id="remember-me" /> Remember me
        </div>
      </div>
      <div class="footer">
        <button type="submit" class="btn bg-olive btn-block">Sign me in</button>
        <p><a href="#">I forgot my password</a></p>
        <a href="register" class="text-center">Register a new membership</a>
      </div>
      {{ Form::close() }}
      <div class="margin text-center">
        <span>Sign in using social networks</span>
        <br/>
        <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
        <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
        <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>
      </div>
    </div>
    <script src="{{ URL::asset('assets/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  </body>
</html>
