<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ Lang::get('common.title') }}</title>
    <link rel="shortcut icon" href="{{ URL::asset('favicon.png') }}">
    <link rel='stylesheet' href="{{ URL::asset('fonts/fonts.css') }}" type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css') }}" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/FlexSlider/flexslider.css') }}" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header id="header">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#id-navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a data-url="header" class="navbar-brand navigate-to">
              <img alt="HaiyanUbills" src="{{ URL::asset('images/logo.png') }}">
              <strong>HaiyanUbills</strong>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="id-navbar-collapse">
            <ul class="nav navbar-nav navbar-pill pull-right">
              <li><a data-url="header" class="navigate-to"><i class="fa fa-home"></i> Home</a></li>
              <li><a data-url="about" class="navigate-to"><i class="fa fa-info"></i> About</a></li>
              <li><a data-url="team" class="navigate-to"><i class="fa fa-users"></i> Team</a></li>
              <li><a data-url="contact" class="navigate-to"><i class="fa fa-envelope"></i> Contact</a></li>
              <li><a data-url="signup-login" class="navigate-to"><i class="fa fa-sign-in"></i> Sign Up/Log In</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="flex-caption">
              <h3>Simple Navigation</h3>
              <p>Lorem ipsum dolor sit amet.</p>
              <a data-url="signup-login" class="btn-slide navigate-to">sign up now</a>
            </div>
            <img src="{{ URL::asset('images/slide-01.jpg') }}" alt="Slide 01">
          </li>
          <li>
            <div class="flex-caption">
              <h3>Smart</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, placeat.</p>
              <a data-url="signup-login" class="btn-slide navigate-to">sign up now</a>
            </div>
            <img src="{{ URL::asset('images/slide-02.jpg') }}" alt="Slide 02">
          </li>
          <li>
            <div class="flex-caption">
              <h3>Organize</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
              <a data-url="signup-login" class="btn-slide navigate-to">sign up now</a>
            </div>
            <img src="{{ URL::asset('images/slide-03.jpg') }}" alt="Slide 03">
          </li>
          <li>
            <div class="flex-caption">
              <h3>Control</h3>
              <p>Lorem ipsum dolor sit.</p>
              <a data-url="signup-login" class="btn-slide navigate-to">sign up now</a>
            </div>
            <img src="{{ URL::asset('images/slide-04.jpg') }}" alt="Slide 04">
          </li>
        </ul>
      </div>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h2 id="about" class="text-primary" data-sr="reset">{{ Lang::get('common.about') }}</h2>
          <hr>
          <p class="text-justify" data-sr="reset">{{ Lang::get('common.about-description') }}</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h2 id="team" class="text-primary" data-sr="reset">Team</h2>
          <hr>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="thumbnail text-center" data-sr="reset">
                <img src="{{ URL::asset('images/300x300.png') }}" alt="..." class="img-circle">
                <div class="caption">
                  <h3>Name</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis aliquam animi amet, vero dignissimos ullam.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="thumbnail text-center" data-sr="reset">
                <img src="{{ URL::asset('images/300x300.png') }}" alt="..." class="img-circle">
                <div class="caption">
                  <h3>Name</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis aliquam animi amet, vero dignissimos ullam.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="thumbnail text-center" data-sr="reset">
                <img src="{{ URL::asset('images/300x300.png') }}" alt="..." class="img-circle">
                <div class="caption">
                  <h3>Name</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis aliquam animi amet, vero dignissimos ullam.</p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="thumbnail text-center" data-sr="reset">
                <img src="{{ URL::asset('images/300x300.png') }}" alt="..." class="img-circle">
                <div class="caption">
                  <h3>Name</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis aliquam animi amet, vero dignissimos ullam.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h2 id="contact" class="text-primary" data-sr="reset">Contact</h2>
          <hr>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="form-group" data-sr="reset">
                <div id="map-canvas" style="width: 100%; height: 300px;"></div>
              </div>
            </div>
          </div>
          {{ Form::open(array('url' => 'contact')) }}
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="form-group" data-sr="reset">
                <label for="contact-name">Name</label>
                <input type="text" class="form-control input-lg" name="contact-name" id="contact-name" placeholder="Enter name">
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <div class="form-group" data-sr="reset">
                <label for="contact-email">Email Address</label>
                <input type="text" class="form-control input-lg" name="contact-email" id="contact-email" placeholder="Enter email address">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="form-group" data-sr="reset">
                <label for="contact-message">Your Message</label>
                <textarea class="form-control input-lg" rows="3" name="contact-message" id="contact-message" placeholder="Enter your message"></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="form-group" data-sr="reset">
                <button class="btn btn-primary btn-lg btn-block" name="submit" id="submit" type="submit">Contact Us</button>
              </div>
            </div>
          </div>
          {{ Form::close() }}
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h2 id="signup-login" class="text-primary" data-sr="reset">Sign Up Now / Log In</h2>
          <hr>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 signup-border">
              <h3 class="text-warning signup-login-title" data-sr="reset">Free Sign Up Now</h3>
              {{ Form::open(array('url' => 'register')) }}
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group" data-sr="reset">
                    <label for="signup-last-name">Last Name</label>
                    <input type="text" class="form-control" name="signup-last-name" id="signup-last-name" placeholder="Enter last name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group" data-sr="reset">
                    <label for="signup-first-name">First Name</label>
                    <input type="text" class="form-control" name="signup-first-name" id="signup-first-name" placeholder="Enter first name">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group" data-sr="reset">
                    <label for="signup-email">Email Address</label>
                    <input type="email" class="form-control" name="signup-email" id="signup-email" placeholder="Enter email address">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group" data-sr="reset">
                    <label for="signup-username">Username</label>
                    <input type="text" class="form-control" name="signup-username" id="signup-username" placeholder="Enter username">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group" data-sr="reset">
                    <label for="signup-password">Password</label>
                    <input type="password" class="form-control" name="signup-password" id="signup-password" placeholder="Enter password">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group" data-sr="reset">
                    <label for="signup-password-confirm">Confirm Password</label>
                    <input type="password" class="form-control" name="signup-password_confirmation" id="signup-password_confirmation" placeholder="Re-enter password">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group" data-sr="reset">
                    <button class="btn btn-primary btn-block" name="signup-submit" id="signup-submit" type="submit">Sign Up Now</button>
                  </div>
                </div>
              </div>
              {{ Form::close() }}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 login-border">
              <h3 class="text-warning signup-login-title" data-sr="reset">Log In To HaiyanUbills</h3>
              {{ Form::open(array('url' => 'login')) }}
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group" data-sr="reset">
                    <label for="login-username">Username</label>
                    <input type="text" class="form-control" name="login-username" id="login-username" placeholder="Enter username">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group" data-sr="reset">
                    <label for="login-password">Password</label>
                    <input type="password" class="form-control" name="login-password" id="login-password" placeholder="Enter password">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group" data-sr="reset">
                    <button class="btn btn-primary btn-block" name="login-submit" id="login-submit" type="submit">Log In</button>
                  </div>
                </div>
              </div>
              {{ Form::close() }}
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <hr>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p class="text-center">&copy; Copyright by Team420</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Google Maps -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ URL::asset('assets/jquery/dist/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/FlexSlider/jquery.flexslider-min.js') }}"></script>
    <script src="{{ URL::asset('assets/scrollReveal.js/dist/scrollReveal.min.js') }}"></script>
    <script src="{{ URL::asset('js/haiyanubills.js') }}"></script>
    <script type="text/javascript">
      var map;
      function initialize() {
        var mapOptions = {
          zoom: 18,
          scrollwheel: false,
          center: new google.maps.LatLng(10.296711, 123.896850)
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </body>
</html>