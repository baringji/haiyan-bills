@extends('common/index')
@section('title')
<title>{{ Lang::get('common.title') }} | Bills</title>
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
      <small>List of bills</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Bills</li>
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
              <th>Period Start</th>
              <th>Period End</th>
              <th>Amount</th>
              <th>Details</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @if (count($bills) > 0)
            @foreach ($bills as $key => $bill)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>{{ $bill->name }}</td>
              <td nowrap="nowrap">{{ $bill->due_date }}</td>
              <td nowrap="nowrap">{{ $bill->period_start }}</td>
              <td nowrap="nowrap">{{ $bill->period_end }}</td>
              <td class="text-right">{{ number_format($bill->amount, 2, '.', ',') }}</td>
              <td>{{ $bill->details }}</td>
              <td>{{ $bill->status }}</td>
              <td>
                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                  <a class="blue" href="#" data-rel="tooltip" title="View"><i class="icon-zoom-in bigger-130"></i></a>
                  <a class="green" href="#" data-rel="tooltip" title="Edit"><i class="icon-pencil bigger-130"></i></a>
                  <a class="red" href="#" data-method="delete" data-rel="tooltip" title="Delete"><i class="icon-trash bigger-130"></i></a>
                </div>
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
        { "bSortable": false }, null, null, null, null, null, null, null, { "bSortable": false }
      ]
    });

    oTable.on('click', '[data-method]', function (e) {
      $('#form-destroy').attr('action', $(this).attr('href')).submit();

      return false;
    });

});
</script>
<script src="{{ URL::asset('assets/AdminLTE/js/AdminLTE/app.js') }}"></script>
@stop
