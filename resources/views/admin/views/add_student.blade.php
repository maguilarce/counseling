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
      <li class="active">Add student to a SLIP Session</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Add student to a SLIP Session</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" id='frm-add-student' method=''>
                <div class="box-body">
                    <div class="form-group">
                        <label>First Name:</label>
                            <input type="text"  class="form-control" id="studentFirstName" name="studentFirstName" placeholder="Enter Student's First Name...">    
                    </div>
                    <div class="form-group">
                        <label>Last Name:</label>
                            <input type="text"  class="form-control" id="studentLastName" name="studentLastName" placeholder="Enter Student's Last Name...">    
                    </div>
                    <div class="form-group">
                        <label>HCC Student ID:</label>
                            <input type="text"  class="form-control" id="studentID" name="studentID" placeholder="Enter Student's HCC ID Number...">    
                    </div>
                    <div class="form-group">
                        <label>Date of Birth:</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" data-provide="datepicker" class="form-control pull-right" id="datepicker" name="studentDateOfBirth">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email address:</label>
                        <input type="email" class="form-control" id="studentEmail" placeholder="Enter HCC Student's Email...">
                    </div>
                    <div class="form-group">
                        <label>Preferred Contact Phone Number:</label>
                        <input type="text"  class="form-control" id="studentPhone" name="studentPhone"  placeholder="Enter Student's Preferred Contact Phone Number...">    
                    </div>
                    <div class="form-group">
                        <label>Select session for student:</label>
                        <select id="studentSelectedSession" name="studentSelectedSession" class="form-control">
                          <option>1:00 pm - 2:30 pm</option>
                          <option>6:00 pm - 7:30 pm</option>
                        </select>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Add Student to SLIP Session</button>
                </div>
              </form>
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