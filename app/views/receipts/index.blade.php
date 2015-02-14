@extends('common/index')
@section('title')
<title>List receipts | {{ Lang::get('common.title') }}</title>
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
        List receipts
        <a class="btn btn-xs btn-primary btn-flat" href="{{ route('receipts.create') }}" data-rel="tooltip" title="Add"><i class="fa fa-plus"></i></a>
      </small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Receipts</li>
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
              <th>Due Date</th>
              <th>Amount</th>
              <th>Payments</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @if (count($receipts) > 0)
            @foreach ($receipts as $key => $receipt)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>{{ $receipt->name }}</td>
              <td nowrap="nowrap">{{ $receipt->due_date }}</td>
              <td class="text-right">{{ number_format($receipt->amount, 2, '.', ',') }}</td>
              <td class="text-right">{{ number_format($receipt->amount, 2, '.', ',') }}</td>
              <td>{{ Lang::get('common.status.' . $receipt->status) }}</td>
              <td nowrap="nowrap">
                <a class="btn btn-xs btn-success btn-flat" href="{{ route('receipts.show', $receipt->id) }}" data-rel="tooltip" title="View"><i class="fa fa-search"></i></a>
                <a class="btn btn-xs btn-info btn-flat" href="{{ route('receipts.edit', $receipt->id) }}" data-rel="tooltip" title="Edit"><i class="fa fa-edit"></i></a>
                <a class="btn btn-xs btn-danger btn-flat" href="{{ route('receipts.destroy', $receipt->id) }}" data-method="delete" data-rel="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
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
          { "bSortable": false }, null, null, null, null, null, { "bSortable": false }
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
