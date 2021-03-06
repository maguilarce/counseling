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
      <li class="active">Create new SLIP Session</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">

              @if(session()->has("message"))
                  <div class="alert alert-success">
                    <p>{{ session('message') }}</p>
                  </div>
              @endif

              @if(count($errors) > 0)
              <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                  <p>{{ $error }}</p>
                @endforeach

              </div>
              @endif
              <div class="box-header with-border">
                <h3 class="box-title">Create a SLIP Session</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form" id='frm-create-session'  method='post' action="{{ route('savesession')  }}">
                {!! csrf_field() !!}
                <div class="box-body">
                    <div class="form-group">
                        <label>Date:</label>
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" data-provide="datepicker" class="form-control pull-right" id="datepicker" name="datepicker">
                        </div>
                        <!-- /.input group -->
                      </div>
                      <div class="form-group">
                        <label>Session Time:</label>
                        <select id="sessionTime" name="sessionTime" class="form-control">
                          <option value="13:00:00">1:00 pm - 2:30 pm</option>
                          <option value="18:00:00">6:00 pm - 7:30 pm</option>
                        </select>
                      </div>

                  <div class="form-group">
                    <label>Semester:</label>
                    <select id="sessionSemester" name="sessionSemester" class="form-control">
                      <option>6193</option>

                    </select>
                  </div>
                </div>
                <!-- /.box-body -->
  
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Create Session</button>
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