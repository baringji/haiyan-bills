@extends('common/index')
@section('title')
<title>View user | {{ Lang::get('common.title') }}</title>
@stop
@section('meta')
<meta itemscope itemtype="http://schema.org/Website" />
<meta itemprop="headline" content="..." />
<meta itemprop="description" content="..." />
<meta itemprop="image" content="{{ URL::asset('images/logo.png') }}" />
<meta property="og:type" content="website" />
<meta itemprop="og:headline" content="..." />
<meta itemprop="og:description" content="..." />
<meta property="og:image" content="{{ URL::asset('images/logo.png') }}" />
@stop
@section('right-side')
<aside class="right-side">
  <section class="content-header">
    <h1>
      Users
      <small>
        View user
        <a class="btn btn-xs btn-default btn-flat" href="{{ route('users.index') }}" data-rel="tooltip" title="Back"><i class="fa fa-undo"></i></a>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('users.index') }}">Users</a></li>
      <li class="active">View</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        {{ Form::open(['class' => 'form-horizontal', 'role' => 'form']) }}
          <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="user_type"> Type </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="user_type" id="user_type" readonly="true" value="{{ Lang::get('common.user_type.' . $user->user_type) }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="first_name"> First Name </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="first_name" id="first_name" placeholder="First Name" value="{{{ $user->first_name or null }}}" readonly="true" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="last_name"> Last Name </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Last Name" value="{{{ $user->last_name or null }}}" readonly="true" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="middle_name"> Middle Name </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="middle_name" id="middle_name" placeholder="Middle Name" value="{{{ $user->middle_name or null }}}" readonly="true" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="email"> Email </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="email" id="email" placeholder="Email" value="{{{ $user->email or null }}}" readonly="true" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="user_name"> Username </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="user_name" id="user_name" placeholder="Username" value="{{{ $user->user_name or null }}}" readonly="true" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="password"> Password </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="password" name="password" id="password" placeholder="Password" value="********************" readonly="true" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="address"> Address </label>
            <div class="col-xs-12 col-sm-5">
              <textarea class="form-control" name="address" id="address" placeholder="Address" readonly="true">{{{ $user->address or null }}}</textarea>
            </div>
          </div>
          <div class="form-actions">
            <div class="col-md-offset-3 col-md-9">
              <a href="{{ route('users.index') }}" class="btn btn-default btn-flat"><i class="fa fa-undo"></i> Back </a>
            </div>
          </div>
        {{ Form::close() }}
      </div>
    </div>
  </section>
</aside>
@stop
@section('stylesheets')
  @parent
  <link href="{{ URL::asset('assets/AdminLTE/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('scripts')
  @parent
  <script src="{{ URL::asset('assets/AdminLTE/js/AdminLTE/app.js') }}"></script>
@stop
