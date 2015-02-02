@extends('common/index')
@section('title')
<title>Update note | {{ Lang::get('common.title') }}</title>
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
      Notes
      <small>
        Update note
        <a class="btn btn-xs btn-default btn-flat" href="{{ route('notes.index') }}" data-rel="tooltip" title="Back"><i class="fa fa-undo"></i></a>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="{{ route('notes.index') }}">Notes</a></li>
      <li class="active">Update</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        {{ Form::open(['route' => array('notes.update', $note->id), 'method' => 'put', 'class' => 'form-horizontal', 'role' => 'form']) }}
          <div class="form-group{{ ($errors->first('name')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="name"> Name </label>
            <div class="col-xs-12 col-sm-5">
              <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="{{{ $note->name or null }}}" />
            </div>
            {{ $errors->first('name', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-group{{ ($errors->first('details')) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 control-label" for="details"> Details </label>
            <div class="col-xs-12 col-sm-5">
              <textarea class="form-control" rows="5" name="details" id="details" placeholder="Details">{{{ $note->details or null }}}</textarea>
            </div>
            {{ $errors->first('details', '<div class="help-block col-xs-12 inline"> :message </div>') }}
          </div>
          <div class="form-actions">
            <div class="col-md-offset-3 col-md-9">
              <button type="submit" name="submit" id="submit" class="btn btn-primary btn-flat"><i class="fa fa-check"></i> Save </button>
              <a href="{{ route('notes.index') }}" class="btn btn-default btn-flat"><i class="fa fa-undo"></i> Back </a>
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
  <link href="{{ URL::asset('assets/AdminLTE/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('assets/AdminLTE/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('scripts')
  @parent
  <script src="{{ URL::asset('assets/AdminLTE/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
  <script src="{{ URL::asset('assets/AdminLTE/js/AdminLTE/app.js') }}"></script>
  <script type="text/javascript">
    jQuery(function($) {

      $('textarea').wysihtml5();

    });
  </script>
@stop
