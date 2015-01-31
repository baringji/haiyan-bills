@extends('common/index')
@section('title')
<title>View bill | {{ Lang::get('common.title') }}</title>
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
        View bill
        <a class="btn btn-xs btn-default btn-flat" href="{{ route('bills.index') }}" data-rel="tooltip" title="Back"><i class="fa fa-undo"></i></a>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('bills.index') }}">Bills</a></li>
      <li class="active">View</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        {{ Form::open(['class' => 'form-horizontal', 'role' => 'form']) }}
          <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="name"> Name </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="{{{ $bill->name or null }}}" readonly="true" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="due_date"> Due Date </label>
            <div class="col-xs-12 col-sm-5">
              <div class="input-group">
                <input class="form-control" type="text" name="due_date" id="due_date" placeholder="Due Date" value="{{{ $bill->due_date or null }}}" readonly="true" />
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="period_start"> Period Start </label>
            <div class="col-xs-12 col-sm-5">
              <div class="input-group">
                <input class="form-control" type="text" name="period_start" id="period_start" placeholder="Period Start" value="{{{ $bill->period_start or null }}}" readonly="true" />
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="period_end"> Period End </label>
            <div class="col-xs-12 col-sm-5">
              <div class="input-group">
                <input class="form-control" type="text" name="period_end" id="period_end" placeholder="Period End" value="{{{ $bill->period_end or null }}}" readonly="true" />
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="amount"> Amount </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="amount" id="amount" placeholder="Amount" value="{{{ $bill->amount or null }}}" readonly="true" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="details"> Details </label>
            <div class="col-xs-12 col-sm-5">
              <textarea class="form-control" name="details" id="details" placeholder="Details" readonly="true">{{{ $bill->details or null }}}</textarea>
            </div>
          </div>
          <div class="form-actions">
            <div class="col-md-offset-3 col-md-9">
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
  <link href="{{ URL::asset('assets/AdminLTE/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('scripts')
  @parent
  <script src="{{ URL::asset('assets/AdminLTE/js/AdminLTE/app.js') }}"></script>
@stop
