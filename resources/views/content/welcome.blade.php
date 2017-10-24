@extends('layout.layout')
@section('content')
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-title-box">
            <h4 class="page-title">Welcome to Kibana Dashboard</h4>
            <ol class="breadcrumb p-0 m-0">
              <li>
                <a href="{{url('/')}}">Kibana dashboard</a>
              </li>
              <li>
                <a href="#">Pages </a>
              </li>
              <li class="active">
                Welcome
              </li>
            </ol>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <!-- end row -->
    </div> <!-- container -->
  </div> <!-- content -->
  @include('common.footer')
</div>
@endsection
