@extends('admin.layouts.layout')

@section('title','Counselor Dashboard')
    


@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      HCC Online College Counseling Services
      <small>SLIP Session Control Panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Counselor Dashboard</a></li>
      <li class="active">View Current SLIP Sessions</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">View Current SLIP Sessions</h3>
                <table class="table table-bordered" id="sessions">
                    <thead>
                       <tr>
                          <th>Id</th>
                          <th>Date & Time</th>
                          <th>Label</th>
                          <th>Semester</th>
                          <th>Status</th>
                          <th>Availability</th>
                          <th>Action</th>

                       </tr>
                    </thead>
                 </table>
              </div>
              <!-- /.box-header -->
             
            </div>
            <!-- /.box -->
  
            
  
          </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->
   

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection