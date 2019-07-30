<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
   
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <!-- HOME -->
      <li><a href="{{ URL::to('/') }}"><i class="fa fa-dashboard"></i> <span>Counselor Dashboard</span></a></li>

      <!-- SLIP Sessions -->
      <li class=" treeview">
        <a href="#">
          <i class="fa fa-medkit "></i> <span>SLIP Sessions</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ URL::to('create-session') }}"><i class="fa fa-plus-circle"></i> Create SLIP Session</a></li>
          <li><a href="{{ URL::to('view-sessions') }}"><i class="fa fa-calendar"></i> View Current SLIP Sessions</a></li>
          <li><a href="{{ URL::to('update-session') }}"><i class="fa fa-edit"></i> Update SLIP Session</a></li>
          <li><a href="{{ URL::to('delete-session') }}"><i class="fa fa-times-circle"></i> Delete SLIP Session</a></li>
        </ul>
      </li>

      <!-- Students -->
      <li class=" treeview">
        <a href="#">
          <i class="fa fa-mortar-board "></i> <span>Students</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ URL::to('view-students') }}"><i class="fa fa-users"></i> View Students Enrollment in<br>     a SLIP Session</a></li>
          <li><a href="{{ URL::to('add-student') }}"><i class="fa fa-user-plus"></i> Add a Student to<br>     a SLIP Session</a></li>
          <li><a href="{{ URL::to('delete-student') }}"><i class="fa fa-user-times"></i> Delete Student from<br>     a SLIP Session</a></li>
        </ul>
      </li>

      <!-- Communication-->
      <li class=" treeview">
        <a href="#">
          <i class="fa fa-comments"></i> <span>Communication</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href=""><i class="fa fa-envelope"></i> Email an Individual Student</a></li>
          <li><a href=""><i class="fa fa-wechat"></i> Email Students Enrolled<br>     in SLIP Session</a></li>
        </ul>
      </li>

     
  </section>
  <!-- /.sidebar -->
</aside>