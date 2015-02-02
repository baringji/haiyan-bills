@extends('common/index')
@section('title')
<title>Create user | {{ Lang::get('common.title') }}</title>
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
        Create user
        <a class="btn btn-xs btn-default btn-flat" href="{{ route('users.index') }}" data-rel="tooltip" title="Back"><i class="fa fa-undo"></i></a>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('users.index') }}">Users</a></li>
      <li class="active">Create</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        {{ Form::open(['route' => 'users.store', 'class' => 'form-horizontal', 'role' => 'form']) }}
          <div class="form-group{{ ($errors->first('user_type')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="user_type"> Type </label>
            <div class="col-xs-12 col-sm-5">
              <select class="form-control" name="user_type" id="user_type">
                <option value="1"> Administrator </option>
                <option value="2"> Consumer </option>
              </select>
            </div>
            {{ $errors->first('user_type', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-group{{ ($errors->first('first_name')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="first_name"> First Name </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="first_name" id="first_name" placeholder="First Name" value="{{ Input::old('first_name') }}" />
            </div>
            {{ $errors->first('first_name', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-group{{ ($errors->first('last_name')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="last_name"> Last Name </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Last Name" value="{{ Input::old('last_name') }}" />
            </div>
            {{ $errors->first('last_name', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-group{{ ($errors->first('middle_name')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="middle_name"> Middle Name </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="middle_name" id="middle_name" placeholder="Middle Name" value="{{ Input::old('middle_name') }}" />
            </div>
            {{ $errors->first('middle_name', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-group{{ ($errors->first('email')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="email"> Email </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="email" id="email" placeholder="Email" value="{{ Input::old('email') }}" />
            </div>
            {{ $errors->first('email', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-group{{ ($errors->first('user_name')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="user_name"> Username </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="user_name" id="user_name" placeholder="Username" value="{{ Input::old('user_name') }}" />
            </div>
            {{ $errors->first('user_name', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-group{{ ($errors->first('password')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="password"> Password </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="password" name="password" id="password" placeholder="Password" />
            </div>
            {{ $errors->first('password', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-group{{ ($errors->first('address')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="address"> Address </label>
            <div class="col-xs-12 col-sm-5">
              <textarea class="form-control" name="address" id="address" placeholder="Address">{{ Input::old('address') }}</textarea>
            </div>
            {{ $errors->first('address', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-actions">
            <div class="col-md-offset-3 col-md-9">
              <button type="submit" name="submit" id="submit" class="btn btn-primary btn-flat"><i class="fa fa-check"></i> Submit </button>
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
