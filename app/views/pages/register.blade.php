<!DOCTYPE html>
<html class="bg-black">
  <head>
    <meta charset="UTF-8">
    <title>HaiyanUbills | Registration</title>
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
      <div class="header">Register New Membership</div>
      {{ Form::open(array('url' => 'register')) }}
        <div class="body bg-gray">
          <div class="form-group">
            <input type="text" class="form-control" name="signup-last-name" id="signup-last-name" placeholder="Enter last name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="signup-first-name" id="signup-first-name" placeholder="Enter first name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="signup-email" id="signup-email" placeholder="Enter email address">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="signup-username" id="signup-username" placeholder="Enter username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="signup-password" id="signup-password" placeholder="Enter password">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="signup-password-confirm" id="signup-password-confirm" placeholder="Re-enter password">
          </div>
        </div>
        <div class="footer">
          <button type="submit" class="btn bg-olive btn-block">Sign me up</button>
          <a href="login" class="text-center">I already have a membership</a>
        </div>
      {{ Form::close() }}
      <div class="margin text-center">
        <span>Register using social networks</span>
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
