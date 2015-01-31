@extends('common/index')
@section('title')
<title>Dashboard | {{ Lang::get('common.title') }}</title>
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
      Dashboard
      <small>Welcome to HaiyanUbills</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>150</h3>
            <p>New Bills</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>
            <p>Rates</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>44</h3>
            <p>User Registrations</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <h3>65</h3>
            <p>Unique Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-xs-12">
        <div class="box box-solid bg-teal">
          <div class="box-header">
            <div class="pull-right box-tools">
              <button class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"><i class="fa fa-calendar"></i></button>
              <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
            </div>
            <i class="fa fa-map-marker"></i>
            <h3 class="box-title">
              Visitors
            </h3>
          </div>
          <div class="box-body">
            <div id="world-map" style="height: 250px;"></div>
          </div>
          <div class="box-footer no-border">
            <div class="row">
              <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                <div id="sparkline-1"></div>
                <div class="knob-label">Visitors</div>
              </div>
              <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                <div id="sparkline-2"></div>
                <div class="knob-label">Online</div>
              </div>
              <div class="col-xs-4 text-center">
                <div id="sparkline-3"></div>
                <div class="knob-label">Members</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xs-12">
        <div class="box box-solid bg-teal-gradient">
          <div class="box-header">
            <i class="fa fa-th"></i>
            <h3 class="box-title">Bills Graph</h3>
            <div class="box-tools pull-right">
              <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body border-radius-none">
            <div class="chart" id="line-chart" style="height: 250px;"></div>
          </div>
          <div class="box-footer no-border">
            <div class="row">
              <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC"/>
                <div class="knob-label">Billed</div>
              </div>
              <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC"/>
                <div class="knob-label">Online</div>
              </div>
              <div class="col-xs-4 text-center">
                <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC"/>
                <div class="knob-label">Payed</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</aside>
@stop
@section('stylesheets')
  @parent
  <link href="{{ URL::asset('assets/AdminLTE/css/morris/morris.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('assets/AdminLTE/css/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ URL::asset('assets/AdminLTE/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
@stop
@section('scripts')
  @parent
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="{{ URL::asset('assets/AdminLTE/js/plugins/morris/morris.min.js') }}"></script>
  <script src="{{ URL::asset('assets/AdminLTE/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ URL::asset('assets/AdminLTE/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
  <script src="{{ URL::asset('assets/AdminLTE/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ URL::asset('assets/AdminLTE/js/plugins/jqueryKnob/jquery.knob.js') }}"></script>
  <script type="text/javascript">
    jQuery(function($) {

    $(document).ready(function() {

      jQuery(".knob").knob();

      var visitorsData = {
        "US": 398, //USA
        "SA": 400, //Saudi Arabia
        "CA": 1000, //Canada
        "DE": 500, //Germany
        "FR": 760, //France
        "CN": 300, //China
        "AU": 700, //Australia
        "BR": 600, //Brazil
        "IN": 800, //India
        "GB": 320, //Great Britain
        "RU": 3000 //Russia
      };
      jQuery('#world-map').vectorMap({
        map: 'world_mill_en',
        backgroundColor: "transparent",
        regionStyle: {
          initial: {
            fill: '#e4e4e4',
            "fill-opacity": 1,
            stroke: 'none',
            "stroke-width": 0,
            "stroke-opacity": 1
          }
        },
        series: {
          regions: [{
              values: visitorsData,
              scale: ["#92c1dc", "#ebf4f9"],
              normalizeFunction: 'polynomial'
            }]
        },
        onRegionLabelShow: function(e, el, code) {
          if (typeof visitorsData[code] != "undefined")
            el.html(el.html() + ': ' + visitorsData[code] + ' new visitors');
        }
      });

      var myValues = [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021];
      jQuery('#sparkline-1').sparkline(myValues, {
        type: 'line',
        lineColor: '#92c1dc',
        fillColor: "#ebf4f9",
        height: '50',
        width: '80'
      });
      myValues = [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921];
      jQuery('#sparkline-2').sparkline(myValues, {
        type: 'line',
        lineColor: '#92c1dc',
        fillColor: "#ebf4f9",
        height: '50',
        width: '80'
      });
      myValues = [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21];
      jQuery('#sparkline-3').sparkline(myValues, {
        type: 'line',
        lineColor: '#92c1dc',
        fillColor: "#ebf4f9",
        height: '50',
        width: '80'
      });

      var line = new Morris.Line({
        element: 'line-chart',
        resize: true,
        data: [
          {y: '2011 Q1', item1: 2666},
          {y: '2011 Q2', item1: 2778},
          {y: '2011 Q3', item1: 4912},
          {y: '2011 Q4', item1: 3767},
          {y: '2012 Q1', item1: 6810},
          {y: '2012 Q2', item1: 5670},
          {y: '2012 Q3', item1: 4820},
          {y: '2012 Q4', item1: 15073},
          {y: '2013 Q1', item1: 10687},
          {y: '2013 Q2', item1: 8432}
        ],
        xkey: 'y',
        ykeys: ['item1'],
        labels: ['Item 1'],
        lineColors: ['#efefef'],
        lineWidth: 2,
        hideHover: 'auto',
        gridTextColor: "#fff",
        gridStrokeWidth: 0.4,
        pointSize: 4,
        pointStrokeColors: ["#efefef"],
        gridLineColor: "#efefef",
        gridTextFamily: "Open Sans",
        gridTextSize: 10
      });

    });

  });
  </script>
  <script src="{{ URL::asset('assets/AdminLTE/js/AdminLTE/app.js') }}"></script>
@stop