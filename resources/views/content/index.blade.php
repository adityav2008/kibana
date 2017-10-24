@extends('layout.layout')
@section('content')
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="page-title-box">
            <h4 class="page-title">Security Dashboard-Endpoints</h4>
            <ol class="breadcrumb p-0 m-0">
              <li>
                <a href="{{url('/')}}">Kibana dashboard</a>
              </li>
              <li>
                <a href="#">Dashboard</a>
              </li>
              <li class="active">
                Security Dashboard-Endpoints
              </li>
            </ol>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <!-- end row -->
      <div class="row">
        <div class="col-lg-6">
          <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">OCS-SCCM-AD-McAfee-FAR-HR Comparison</h4>
            <div class="table-responsive">
              <table class="table table table-hover m-0">
                <thead>
                  <tr>
                    <th>Status</th>
                    <th>Count</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>
                      <img src="{{url('public/assets/images/users/avatar-1.jpg')}}" alt="user" class="thumb-sm img-circle" />
                    </th>
                    <td>
                      <h5 class="m-0">Louis Hansen</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div> <!-- table-responsive -->
          </div> <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-lg-6">
          <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">SCCM Emp-Asset Allocation Ratio</h4>
            <div class="table-responsive">
              <table class="table table table-hover m-0">
                <thead>
                  <tr>
                    <th>EMP_ASSET</th>
                    <th>Count</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-success">L</span>
                    </th>
                    <td>
                      <h5 class="m-0">Louis Hansen</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div> <!-- table-responsive -->
          </div> <!-- end card -->
        </div>

        <div class="col-lg-6">
          <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">SCCM Endpoint OS</h4>
            <div class="table-responsive">
              <table class="table table table-hover m-0">
                <thead>
                  <tr>
                    <th>Operating System</th>
                    <th>Unique Count Of Net_Bios_Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-success">L</span>
                    </th>
                    <td>
                      <h5 class="m-0">Louis Hansen</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div> <!-- table-responsive -->
          </div> <!-- end card -->
        </div>

        <div class="col-lg-6">
          <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">SCCM Patch Domain</h4>
            <div class="table-responsive">
              <table class="table table table-hover m-0">
                <thead>
                  <tr>
                    <th>Domain</th>
                    <th>Unique Count of Net_Bios_Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-success">L</span>
                    </th>
                    <td>
                      <h5 class="m-0">Louis Hansen</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div> <!-- table-responsive -->
          </div> <!-- end card -->
        </div>

        <div class="col-lg-6">
          <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">SCCM Patch Asset Type</h4>
            <div class="table-responsive">
              <table class="table table table-hover m-0">
                <thead>
                  <tr>
                    <th>Asset Type</th>
                    <th>Unique Count of Net_Bios_Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-success">L</span>
                    </th>
                    <td>
                      <h5 class="m-0">Louis Hansen</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div> <!-- table-responsive -->
          </div> <!-- end card -->
        </div>

        <div class="col-lg-6">
          <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">SCCM Patch Location</h4>
            <div class="table-responsive">
              <table class="table table table-hover m-0">
                <thead>
                  <tr>
                    <th>Location</th>
                    <th>Unique Count Of Net_Bios_Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-success">L</span>
                    </th>
                    <td>
                      <h5 class="m-0">Louis Hansen</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div> <!-- table-responsive -->
          </div> <!-- end card -->
        </div>

        <div class="col-lg-6">
          <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">SCCM Month Posted</h4>
            <div class="table-responsive">
              <table class="table table table-hover m-0">
                <thead>
                  <tr>
                    <th>Date Posted</th>
                    <th>Unique Count Of Patch ID</th>
                    <th>Unique Count Of Net_Bios_Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-success">L</span>
                    </th>
                    <td>
                      <h5 class="m-0">Louis Hansen</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div> <!-- table-responsive -->
          </div> <!-- end card -->
        </div>

        <div class="col-lg-6">
          <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">SCCM Patch Department</h4>
            <div class="table-responsive">
              <table class="table table table-hover m-0">
                <thead>
                  <tr>
                    <th>Department</th>
                    <th>Unique Count Of Net_Bios_Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-success">L</span>
                    </th>
                    <td>
                      <h5 class="m-0">Louis Hansen</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div> <!-- table-responsive -->
          </div> <!-- end card -->
        </div>

        <div class="col-lg-6">
          <div class="card-box">
            <h4 class="header-title m-t-0 m-b-30">SCCM Asset Status</h4>
            <div class="table-responsive">
              <table class="table table table-hover m-0">
                <thead>
                  <tr>
                    <th>Asset Status</th>
                    <th>Unique Count Of Net_Bios_Name</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-success">L</span>
                    </th>
                    <td>
                      <h5 class="m-0">Louis Hansen</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div> <!-- table-responsive -->
          </div> <!-- end card -->
        </div>

        <!-- end col -->
      </div>
      <!-- end row -->
    </div> <!-- container -->
  </div> <!-- content -->
  <footer class="footer text-right">
    @include('common.footer')
  </footer>
</div>
@endsection
