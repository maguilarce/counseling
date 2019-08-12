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
      <li class="active">View Students Enrollment in a SLIP Sessions</li>
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
                <h3 class="box-title">View Students Enrollment in a SLIP Sessions</h3>
                <table class="table table-bordered" id="students">
                    <thead>
                       <tr>
                          <th>Student ID</th>
                          <th>Date of Birth</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Contact Number</th>
                          <th>Email</th>
                          <th>Session</th>
                          <th>Status</th>
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