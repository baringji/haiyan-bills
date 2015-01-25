<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

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
              <p>Hello, Jane</p>
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
          <ul class="sidebar-menu">
            <li><a href="dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="bills"><i class="fa fa-calendar"></i> <span>Bills</span></a></li>
            <li><a href="receipts"><i class="fa fa-th"></i> <span>Receipts</span></a></li>
            <li><a href="files"><i class="fa fa-folder"></i> <span>Files</span></a></li>
            <li><a href="payment-centers"><i class="fa fa-bookmark"></i> <span>Payment Centers</span></a></li>
            <li><a href="landmarks"><i class="fa fa-map-marker"></i> <span>Landmarks</span></a></li>
          </ul>
        </section>
      </aside>

      @yield('right-side')

    </div>

    @include('common/scripts')

  </body>
</html>
