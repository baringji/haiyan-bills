<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="{{ URL::asset('favicon.png') }}">

    @yield('title')
    @yield('meta')

    @include('common/stylesheets')

  </head>
  <body class="skin-blue">

    @include('common/header')

    <div class="wrapper row-offcanvas row-offcanvas-left">
      <aside class="left-side sidebar-offcanvas">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ URL::asset('images/avatar.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Hello, {{ Auth::user()->first_name }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>

          @include('common/sidebar')

        </section>
      </aside>

      @yield('right-side')

    </div>

    @include('common/scripts')

  </body>
</html>
