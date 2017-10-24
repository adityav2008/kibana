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
                    <th></th>
                    <th>User Name</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Date</th>
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
                    <td>+12 3456 789</td>
                    <td>USA</td>
                    <td>07/08/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <img src="{{url('public/assets/images/users/avatar-2.jpg')}}" alt="user" class="thumb-sm img-circle" />
                    </th>
                    <td>
                      <h5 class="m-0">Craig Hause</h5>
                      <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                    </td>
                    <td>+89 345 6789</td>
                    <td>Canada</td>
                    <td>29/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <img src="{{url('public/assets/images/users/avatar-3.jpg')}}" alt="user" class="thumb-sm img-circle" />
                    </th>
                    <td>
                      <h5 class="m-0">Edward Grimes</h5>
                      <p class="m-0 text-muted font-13"><small>Founder</small></p>
                    </td>
                    <td>+12 29856 256</td>
                    <td>Brazil</td>
                    <td>22/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <img src="{{url('public/assets/images/users/avatar-4.jpg')}}" alt="user" class="thumb-sm img-circle" />
                    </th>
                    <td>
                      <h5 class="m-0">Bret Weaver</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                    <td>+00 567 890</td>
                    <td>USA</td>
                    <td>20/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <img src="{{url('public/assets/images/users/avatar-5.jpg')}}" alt="user" class="thumb-sm img-circle" />
                    </th>
                    <td>
                      <h5 class="m-0">Mark</h5>
                      <p class="m-0 text-muted font-13"><small>Web design</small></p>
                    </td>
                    <td>+91 123 456</td>
                    <td>India</td>
                    <td>07/07/2016</td>
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
                    <th></th>
                    <th>User Name</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Date</th>
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
                    <td>+12 3456 789</td>
                    <td>USA</td>
                    <td>07/08/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-primary">C</span>
                    </th>
                    <td>
                      <h5 class="m-0">Craig Hause</h5>
                      <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                    </td>
                    <td>+89 345 6789</td>
                    <td>Canada</td>
                    <td>29/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-brown">E</span>
                    </th>
                    <td>
                      <h5 class="m-0">Edward Grimes</h5>
                      <p class="m-0 text-muted font-13"><small>Founder</small></p>
                    </td>
                    <td>+12 29856 256</td>
                    <td>Brazil</td>
                    <td>22/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-pink">B</span>
                    </th>
                    <td>
                      <h5 class="m-0">Bret Weaver</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                    <td>+00 567 890</td>
                    <td>USA</td>
                    <td>20/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-orange">M</span>
                    </th>
                    <td>
                      <h5 class="m-0">Mark</h5>
                      <p class="m-0 text-muted font-13"><small>Web design</small></p>
                    </td>
                    <td>+91 123 456</td>
                    <td>India</td>
                    <td>07/07/2016</td>
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
                    <th></th>
                    <th>User Name</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Date</th>
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
                    <td>+12 3456 789</td>
                    <td>USA</td>
                    <td>07/08/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-primary">C</span>
                    </th>
                    <td>
                      <h5 class="m-0">Craig Hause</h5>
                      <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                    </td>
                    <td>+89 345 6789</td>
                    <td>Canada</td>
                    <td>29/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-brown">E</span>
                    </th>
                    <td>
                      <h5 class="m-0">Edward Grimes</h5>
                      <p class="m-0 text-muted font-13"><small>Founder</small></p>
                    </td>
                    <td>+12 29856 256</td>
                    <td>Brazil</td>
                    <td>22/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-pink">B</span>
                    </th>
                    <td>
                      <h5 class="m-0">Bret Weaver</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                    <td>+00 567 890</td>
                    <td>USA</td>
                    <td>20/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-orange">M</span>
                    </th>
                    <td>
                      <h5 class="m-0">Mark</h5>
                      <p class="m-0 text-muted font-13"><small>Web design</small></p>
                    </td>
                    <td>+91 123 456</td>
                    <td>India</td>
                    <td>07/07/2016</td>
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
                    <th></th>
                    <th>User Name</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Date</th>
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
                    <td>+12 3456 789</td>
                    <td>USA</td>
                    <td>07/08/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-primary">C</span>
                    </th>
                    <td>
                      <h5 class="m-0">Craig Hause</h5>
                      <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                    </td>
                    <td>+89 345 6789</td>
                    <td>Canada</td>
                    <td>29/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-brown">E</span>
                    </th>
                    <td>
                      <h5 class="m-0">Edward Grimes</h5>
                      <p class="m-0 text-muted font-13"><small>Founder</small></p>
                    </td>
                    <td>+12 29856 256</td>
                    <td>Brazil</td>
                    <td>22/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-pink">B</span>
                    </th>
                    <td>
                      <h5 class="m-0">Bret Weaver</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                    <td>+00 567 890</td>
                    <td>USA</td>
                    <td>20/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-orange">M</span>
                    </th>
                    <td>
                      <h5 class="m-0">Mark</h5>
                      <p class="m-0 text-muted font-13"><small>Web design</small></p>
                    </td>
                    <td>+91 123 456</td>
                    <td>India</td>
                    <td>07/07/2016</td>
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
                    <th></th>
                    <th>User Name</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Date</th>
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
                    <td>+12 3456 789</td>
                    <td>USA</td>
                    <td>07/08/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-primary">C</span>
                    </th>
                    <td>
                      <h5 class="m-0">Craig Hause</h5>
                      <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                    </td>
                    <td>+89 345 6789</td>
                    <td>Canada</td>
                    <td>29/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-brown">E</span>
                    </th>
                    <td>
                      <h5 class="m-0">Edward Grimes</h5>
                      <p class="m-0 text-muted font-13"><small>Founder</small></p>
                    </td>
                    <td>+12 29856 256</td>
                    <td>Brazil</td>
                    <td>22/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-pink">B</span>
                    </th>
                    <td>
                      <h5 class="m-0">Bret Weaver</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                    <td>+00 567 890</td>
                    <td>USA</td>
                    <td>20/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-orange">M</span>
                    </th>
                    <td>
                      <h5 class="m-0">Mark</h5>
                      <p class="m-0 text-muted font-13"><small>Web design</small></p>
                    </td>
                    <td>+91 123 456</td>
                    <td>India</td>
                    <td>07/07/2016</td>
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
                    <th></th>
                    <th>User Name</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Date</th>
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
                    <td>+12 3456 789</td>
                    <td>USA</td>
                    <td>07/08/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-primary">C</span>
                    </th>
                    <td>
                      <h5 class="m-0">Craig Hause</h5>
                      <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                    </td>
                    <td>+89 345 6789</td>
                    <td>Canada</td>
                    <td>29/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-brown">E</span>
                    </th>
                    <td>
                      <h5 class="m-0">Edward Grimes</h5>
                      <p class="m-0 text-muted font-13"><small>Founder</small></p>
                    </td>
                    <td>+12 29856 256</td>
                    <td>Brazil</td>
                    <td>22/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-pink">B</span>
                    </th>
                    <td>
                      <h5 class="m-0">Bret Weaver</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                    <td>+00 567 890</td>
                    <td>USA</td>
                    <td>20/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-orange">M</span>
                    </th>
                    <td>
                      <h5 class="m-0">Mark</h5>
                      <p class="m-0 text-muted font-13"><small>Web design</small></p>
                    </td>
                    <td>+91 123 456</td>
                    <td>India</td>
                    <td>07/07/2016</td>
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
                    <th></th>
                    <th>User Name</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Date</th>
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
                    <td>+12 3456 789</td>
                    <td>USA</td>
                    <td>07/08/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-primary">C</span>
                    </th>
                    <td>
                      <h5 class="m-0">Craig Hause</h5>
                      <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                    </td>
                    <td>+89 345 6789</td>
                    <td>Canada</td>
                    <td>29/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-brown">E</span>
                    </th>
                    <td>
                      <h5 class="m-0">Edward Grimes</h5>
                      <p class="m-0 text-muted font-13"><small>Founder</small></p>
                    </td>
                    <td>+12 29856 256</td>
                    <td>Brazil</td>
                    <td>22/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-pink">B</span>
                    </th>
                    <td>
                      <h5 class="m-0">Bret Weaver</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                    <td>+00 567 890</td>
                    <td>USA</td>
                    <td>20/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-orange">M</span>
                    </th>
                    <td>
                      <h5 class="m-0">Mark</h5>
                      <p class="m-0 text-muted font-13"><small>Web design</small></p>
                    </td>
                    <td>+91 123 456</td>
                    <td>India</td>
                    <td>07/07/2016</td>
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
                    <th></th>
                    <th>User Name</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Date</th>
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
                    <td>+12 3456 789</td>
                    <td>USA</td>
                    <td>07/08/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-primary">C</span>
                    </th>
                    <td>
                      <h5 class="m-0">Craig Hause</h5>
                      <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                    </td>
                    <td>+89 345 6789</td>
                    <td>Canada</td>
                    <td>29/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-brown">E</span>
                    </th>
                    <td>
                      <h5 class="m-0">Edward Grimes</h5>
                      <p class="m-0 text-muted font-13"><small>Founder</small></p>
                    </td>
                    <td>+12 29856 256</td>
                    <td>Brazil</td>
                    <td>22/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-pink">B</span>
                    </th>
                    <td>
                      <h5 class="m-0">Bret Weaver</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                    <td>+00 567 890</td>
                    <td>USA</td>
                    <td>20/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-orange">M</span>
                    </th>
                    <td>
                      <h5 class="m-0">Mark</h5>
                      <p class="m-0 text-muted font-13"><small>Web design</small></p>
                    </td>
                    <td>+91 123 456</td>
                    <td>India</td>
                    <td>07/07/2016</td>
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
                    <th></th>
                    <th>User Name</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Date</th>
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
                    <td>+12 3456 789</td>
                    <td>USA</td>
                    <td>07/08/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-primary">C</span>
                    </th>
                    <td>
                      <h5 class="m-0">Craig Hause</h5>
                      <p class="m-0 text-muted font-13"><small>Programmer</small></p>
                    </td>
                    <td>+89 345 6789</td>
                    <td>Canada</td>
                    <td>29/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-brown">E</span>
                    </th>
                    <td>
                      <h5 class="m-0">Edward Grimes</h5>
                      <p class="m-0 text-muted font-13"><small>Founder</small></p>
                    </td>
                    <td>+12 29856 256</td>
                    <td>Brazil</td>
                    <td>22/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-pink">B</span>
                    </th>
                    <td>
                      <h5 class="m-0">Bret Weaver</h5>
                      <p class="m-0 text-muted font-13"><small>Web designer</small></p>
                    </td>
                    <td>+00 567 890</td>
                    <td>USA</td>
                    <td>20/07/2016</td>
                  </tr>
                  <tr>
                    <th>
                      <span class="avatar-sm-box bg-orange">M</span>
                    </th>
                    <td>
                      <h5 class="m-0">Mark</h5>
                      <p class="m-0 text-muted font-13"><small>Web design</small></p>
                    </td>
                    <td>+91 123 456</td>
                    <td>India</td>
                    <td>07/07/2016</td>
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
