<!DOCTYPE html>
<html>
<?php echo $__env->make('templates/index/head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SI</b>R</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SI</b> Rubik</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      
      <?php echo $__env->make('templates/index/navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </nav>
  </header>
  <?php if(Auth::user()->role!='dosen'): ?>
  <?php echo $__env->make('templates/index/sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<?php else: ?>
  <?php echo $__env->make('templates/index/dosensidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Jadwal Saya
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#semester_1" data-toggle="tab">Jadwal Pelajaran yang Anda Ajarkan</a></li>
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="semester_1">
                        <table id="tabel_semester_1" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                              <th>Nomor</th>
                              <th>Kode Pelajaran</th>
                              <th>Nama Pelajaran</th>
                              <th>Jam Mengajar</th>
                          </tr>
                          </thead>
                          <tbody>
                              <?php
                                $jadwals = App\Jadwal::where('id_mhs','=',Auth::user()->id)->get();
                                $i=1;
                              ?>
                              <?php $__currentLoopData = $jadwals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                  <td><?php echo e($i++); ?></td>
                                  <td><?php echo e(App\Matkul::where('id', '=', $jadwal->id_matkul)->first()->code); ?></td>
                                  <td><?php echo e(App\Matkul::where('id', '=', $jadwal->id_matkul)->first()->name); ?></td>
                                  <td><?php echo e(App\Matkul::where('id', '=', $jadwal->id_matkul)->first()->sks); ?></td>
                              </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                          <tfoot>
                          <tr>
                            <th>Nomor</th>
                            <th>Kode Pelajaran</th>
                            <th>Nama Pelajaran</th>
                            <th>Jam Mengajar</th>
                          </tr>
                          </tfoot>
                        </table>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="semester_2">
                      <table id="tabel_semester_2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Kode Pelajaran</th>
                            <th>Nama Pelajaran</th>
                            <th>Jam Mengajar</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                              $jadwals = App\Jadwal::where('id_mhs','=',Auth::user()->id)->get();
                              $i=1;
                            ?>
                            <?php $__currentLoopData = $jadwals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><?php echo e(App\Matkul::where('id', '=', $jadwal->id_matkul)->first()->code); ?></td>
                                <td><?php echo e(App\Matkul::where('id', '=', $jadwal->id_matkul)->first()->name); ?></td>
                                <td><?php echo e(App\Matkul::where('id', '=', $jadwal->id_matkul)->first()->sks); ?></td>
                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                          <tfoot>
                        <tr>
                          <th>Nomor</th>
                          <th>Kode Pelajaran</th>
                          <th>Nama Pelajaran</th>
                          <th>Jam Mengajar</th>
                        </tr>
                        </tfoot>
                      </table>
                   
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="semester_3">
                      <table id="tabel_semester_3" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Kode Pelajaran</th>
                            <th>Nama Pelajaran</th>
                            <th>Jam Mengajar</th>
                        </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                          </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                          <th>Nomor</th>
                          <th>Kode Pelajaran</th>
                          <th>Nama Pelajaran</th>
                          <th>Jam Mengajar</th>
                        </tr>
                        </tfoot>
                      </table>
                    
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>


        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <?php if(Auth::user()->approve=='0'): ?> 
      <?php elseif(Auth::user()->approve=='1'): ?> 
      <?php elseif(Auth::user()->approve=='2'): ?> 
      <?php endif; ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php echo $__env->make('templates/index/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
      $('#tabel_semester_1').DataTable()
      $('#tabel_semester_2').DataTable()
      $('#tabel_semester_3').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
</body>
</html>
