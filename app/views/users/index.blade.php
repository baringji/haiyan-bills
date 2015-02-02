@extends('common/index')
@section('title')
<title>List users | {{ Lang::get('common.title') }}</title>
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
        List users
        <a class="btn btn-xs btn-primary btn-flat" href="{{ route('users.create') }}" data-rel="tooltip" title="Add"><i class="fa fa-plus"></i></a>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Users</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th></th>
              <th>Last Name</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Type</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @if (count($users) > 0)
            @foreach ($users as $key => $user)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>{{ $user->last_name }}</td>
              <td>{{ $user->first_name }}</td>
              <td>{{ $user->middle_name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->address }}</td>
              <td>{{ Lang::get('common.user_type.' . $user->user_type) }}</td>
              <td>{{ Lang::get('common.status.' . $user->status) }}</td>
              <td nowrap="nowrap">
                @if (Auth::user()->user_type < $user->user_type)
                <a class="btn btn-xs btn-success btn-flat" href="{{ route('users.show', $user->id) }}" data-rel="tooltip" title="View"><i class="fa fa-search"></i></a>
                <a class="btn btn-xs btn-info btn-flat" href="{{ route('users.edit', $user->id) }}" data-rel="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                <a class="btn btn-xs btn-danger btn-flat" href="{{ route('users.destroy', $user->id) }}" data-method="delete" data-rel="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
                @endif
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
{{ Form::open(['id' => 'form-destroy', 'class' => 'hidden', 'method' => 'delete']) }}
{{ Form::close() }}
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
          { "bSortable": false }, null, null, null, null, null, null, null, { "bSortable": false }
        ],
        "bLengthChange": false,
        "bFilter": false
      });

      oTable.on('click', '[data-method]', function (e) {
        $('#form-destroy').attr('action', $(this).attr('href')).submit();

        return false;
      });

  });
  </script>
  <script src="{{ URL::asset('assets/AdminLTE/js/AdminLTE/app.js') }}"></script>
@stop
