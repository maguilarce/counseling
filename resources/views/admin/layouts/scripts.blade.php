<!-- jQuery 3 -->
<script src="{{ url('bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- datepicker -->
<script src="{{ url('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ url('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('dist/js/pages/dashboard.js') }}"></script>
<!-- Data Tables JS-->
<script src="{{ url('assets/js/jquery.dataTables.min.js') }}"></script>
<!-- JQuery Validate -->
<script src="{{ url('assets/js/jquery.validate.js') }}"></script>
<!-- Sweet Alert JS -->
<script src="{{ url('assets/js/sweetalert.js') }}"></script>
<!-- Customized JS -->
<script src="{{ url('assets/js/custom-script.js') }}"></script>


<script>
  $(function() {
    if($('#sessions').length >0){
        $('#sessions').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('listallsessions')}}",
        columns: [
                 { data: 'id', name: 'id' },
                 { data: 'date', name: 'date' },
                 { data: 'label', name: 'label' },
                 { data: 'semester', name: 'semester' },
                 { data: 'status', name: 'status' },
                 { data: 'availability', name: 'availability' },
                 { data: 'action_btns', name: 'action_btns'}
                 
                 
              ]
     });
    }
  });

  $(function() {
    if($('#students').length >0){
        $('#students').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('listallstudents')}}",
        columns: [
                 { data: 'student_id', name: 'student_id' },
                 { data: 'student_dob', name: 'student_dob' },
                 { data: 'first_name', name: 'first_name' },
                 { data: 'last_name', name: 'last_name' },
                 { data: 'contact_number', name: 'contact_number' },
                 { data: 'email', name: 'email' },
                 { data: 'label', name: 'label' },
                 { data: 'status', name: 'status' },
                 { data: 'action_btns',name: 'action_btns'}
                 // orderable: true,
                 // searchable: true }
                 
                 
              ]
     });
    }
  });
  </script>