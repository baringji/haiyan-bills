@extends('common/index')
@section('title')
<title>Create receipt | {{ Lang::get('common.title') }}</title>
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
      Receipts
      <small>
        Create receipt
        <a class="btn btn-xs btn-default btn-flat" href="{{ route('receipts.index') }}" data-rel="tooltip" title="Back"><i class="fa fa-undo"></i></a>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('receipts.index') }}">Receipts</a></li>
      <li class="active">Create</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        {{ Form::open(['route' => 'receipts.store', 'class' => 'form-horizontal', 'role' => 'form']) }}
          <div class="form-group{{ ($errors->first('bill')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="bill"> Bill </label>
            <div class="col-xs-12 col-sm-5">
              <select class="form-control" name="bill" id="bill">
                @if (count($bills) > 0)
                @foreach ($bills as $key => $bill)
                <option value="{{ $bill->id }}"> {{ $bill->name }} </option>
                @endforeach;
                @endif;
              </select>
            </div>
            {{ $errors->first('bill', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-group{{ ($errors->first('amount')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="amount"> Amount </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="amount" id="amount" placeholder="Amount" value="{{ Input::old('amount') }}" />
            </div>
            {{ $errors->first('amount', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-actions">
            <div class="col-md-offset-3 col-md-9">
              <button type="submit" name="submit" id="submit" class="btn btn-primary btn-flat"><i class="fa fa-check"></i> Submit </button>
              <a href="{{ route('receipts.index') }}" class="btn btn-default btn-flat"><i class="fa fa-undo"></i> Back </a>
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
