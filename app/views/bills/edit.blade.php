@extends('common/index')
@section('title')
<title>Update bill | {{ Lang::get('common.title') }}</title>
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
      Bills
      <small>
        Update bill
        <a class="btn btn-xs btn-default btn-flat" href="{{ route('bills.index') }}" data-rel="tooltip" title="Back"><i class="fa fa-undo"></i></a>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('bills.index') }}">Bills</a></li>
      <li class="active">Update</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        {{ Form::open(['route' => array('bills.update', $bill->id), 'method' => 'put', 'class' => 'form-horizontal', 'role' => 'form']) }}
          <div class="form-group{{ ($errors->first('name')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="name"> Name </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="{{{ $bill->name or null }}}" />
            </div>
            {{ $errors->first('name', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-group{{ ($errors->first('due_date')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="due_date"> Due Date </label>
            <div class="col-xs-12 col-sm-5">
              <div class="input-group">
                <input class="form-control datepicker" type="text" name="due_date" id="due_date" placeholder="Due Date" value="{{{ $bill->due_date or null }}}" />
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
              </div>
            </div>
            {{ $errors->first('due_date', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-group{{ ($errors->first('period_start')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="period_start"> Period Start </label>
            <div class="col-xs-12 col-sm-5">
              <div class="input-group">
                <input class="form-control datepicker" type="text" name="period_start" id="period_start" placeholder="Period Start" value="{{{ $bill->period_start or null }}}" />
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
              </div>
            </div>
            {{ $errors->first('period_start', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-group{{ ($errors->first('period_end')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="period_end"> Period End </label>
            <div class="col-xs-12 col-sm-5">
              <div class="input-group">
                <input class="form-control datepicker" type="text" name="period_end" id="period_end" placeholder="Period End" value="{{{ $bill->period_end or null }}}" />
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
              </div>
            </div>
            {{ $errors->first('period_end', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-group{{ ($errors->first('amount')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="amount"> Amount </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="amount" id="amount" placeholder="Amount" value="{{{ $bill->amount or null }}}" />
            </div>
            {{ $errors->first('amount', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-group{{ ($errors->first('details')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="details"> Details </label>
            <div class="col-xs-12 col-sm-5">
              <textarea class="form-control" name="details" id="details" placeholder="Details">{{{ $bill->details or null }}}</textarea>
            </div>
            {{ $errors->first('details', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-group{{ ($errors->first('status')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="status"> Status </label>
            <div class="col-xs-12 col-sm-5">
              <select class="form-control" name="status" id="status">
                <option value="O"{{ ($bill->status == 'O') ? ' selected="true"' : '' }}> Open </option>
                <option value="C"{{ ($bill->status == 'C') ? ' selected="true"' : '' }}> Close </option>
              </select>
            </div>
            {{ $errors->first('status', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-actions">
            <div class="col-md-offset-3 col-md-9">
              <button type="submit" name="submit" id="submit" class="btn btn-primary btn-flat"><i class="fa fa-check"></i> Save </button>
              <a href="{{ route('bills.index') }}" class="btn btn-default btn-flat"><i class="fa fa-undo"></i> Back </a>
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
  <link href="{{ URL::asset('assets/AdminLTE/css/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('assets/AdminLTE/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('scripts')
  @parent
  <script src="{{ URL::asset('assets/AdminLTE/js/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
  <script src="{{ URL::asset('assets/AdminLTE/js/AdminLTE/app.js') }}"></script>
  <script type="text/javascript">
    jQuery(function($) {

      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true
      });

    });
  </script>
@stop
