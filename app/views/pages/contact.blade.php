@extends('common/index')
@section('title')
<title>List of inquiries | {{ Lang::get('common.title') }}</title>
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
      Contact Forms
      <small>
        List of inquiries
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Contact Forms</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th></th>
              <th>Name</th>
              <th>Email</th>
              <th>Message</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @if (count($contacts) > 0)
            @foreach ($contacts as $key => $contact)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>{{ $contact->name }}</td>
              <td>{{ $contact->email }}</td>
              <td>{{ $contact->message }}</td>
              <td nowrap="nowrap">
                <a class="btn btn-xs btn-success btn-flat" href="mailto:{{ $contact->email }}" data-rel="tooltip" title="Reply to Inquiry"><i class="fa fa-mail-reply"></i></a>
              </td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>
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
  <script type="text/javascript">
    jQuery(function($) {

      var oTable = $('table').dataTable({
        "aoColumns": [
          { "bSortable": false }, null, null, null, { "bSortable": false }
        ],
        "bLengthChange": false,
        "bFilter": false
      });

  });
  </script>
  <script src="{{ URL::asset('assets/AdminLTE/js/AdminLTE/app.js') }}"></script>
@stop
