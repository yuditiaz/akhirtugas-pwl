<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Sistem Informasi Penjualan Motor</title>
    <!-- Icon -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo base_url();?>/assets/gambar/logo.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/fa/css/font-awesome.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/daterangepicker/daterangepicker.css">
     <link href="<?php echo base_url();?>/assets/dist/sweetalert.css" rel="stylesheet">
  <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/skins/skin-green.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/timepicker/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/timepicker/bootstrap-timepicker.min.css">
  </head>
  <body class="hold-transition skin-green sidebar-mini">
    <div class="loader"></div>
    <div class="wrapper">
      <?php
        include "content_header.php";  
       ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <div class="user-panel">
            <center>

          <img src="<?php echo base_url();?>/assets/gambar/logo.png" style="margin-left: -20px;" class="img-circle" alt="User Image" width="100px;">
       
        </center>
      </div>
          <!-- Sidebar user panel -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
            
          <ul class="sidebar-menu" style="margin-top: 20px;">
              <li class="active"><a href="<?php echo site_url('admin/page/home');?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
 <li class="treeview">
                <a href="#">
                  <i class="fa fa-square"></i>
                  <span>Data Master</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                   <li><a href="<?php echo site_url('admin/page/tb_login');?>" ><i class="fa fa-circle-o"></i><span>Data Login </span></a></li>
                  <li><a href="<?php echo site_url('admin/page/tb_pembeli');?>" ><i class="fa fa-circle-o"></i><span>Data Pembeli </span></a></li>
                   <li><a href="<?php echo site_url('admin/page/tb_pegawai');?>" ><i class="fa fa-circle-o"></i><span>Data Pegawai </span></a></li>
                </ul>
              </li>
               <li><a href="<?php echo site_url('admin/page/tb_motor');?>" ><i class="fa fa-motorcycle"></i><span>Data Motor </span></a></li>
                <li><a href="<?php echo site_url('admin/page/tb_transaksi');?>" ><i class="fa fa-square"></i><span>Data Transaksi </span></a></li>
          </ul>

        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <?php
            include "content/".$page.".php";
        ?>
    </div><!-- /.content-wrapper -->
    <?php
        include "content_footer.php";
    ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>/assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url();?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url();?>/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>/assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>/assets/dist/js/app.min.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/datepicker/bootstrap-datepicker.js"></script>  
  <script src="<?php echo base_url();?>/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
  <script src="<?php echo base_url();?>/assets/dist/sweetalert.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/ckeditor/ckeditor.js"></script>
  
  <script type="text/javascript">
  $(document).ready(function(){
    $('#data').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false
    });
  });
</script>
 <script type="text/javascript">
  var ckeditor = CKEDITOR.replace('editor2',{
    entities: false,
    basicEntities: false,
    entities_greek: false,
    entities_latin: false,
    htmlDecodeOutput:true
  });
  CKEDITOR.disableAutoInline = true;
  CKEDITOR.inline('editable');
</script>
 <script type="text/javascript">
  var ckeditor = CKEDITOR.replace('edito3',{
    entities: false,
    basicEntities: false,
    entities_greek: false,
    entities_latin: false,
    htmlDecodeOutput:true
  });
  CKEDITOR.disableAutoInline = true;
  CKEDITOR.inline('editable');
</script>
 <script type="text/javascript">
  var ckeditor = CKEDITOR.replace('editor5',{
    entities: false,
    basicEntities: false,
    entities_greek: false,
    entities_latin: false,
    htmlDecodeOutput:true
  });
  CKEDITOR.disableAutoInline = true;
  CKEDITOR.inline('editable');
</script>
 <script type="text/javascript">
  var ckeditor = CKEDITOR.replace('edito4',{
    entities: false,
    basicEntities: false,
    entities_greek: false,
    entities_latin: false,
    htmlDecodeOutput:true
  });
  CKEDITOR.disableAutoInline = true;
  CKEDITOR.inline('editable');
</script>
 <script type="text/javascript">
  var ckeditor = CKEDITOR.replace('editor',{
    entities: false,
    basicEntities: false,
    entities_greek: false,
    entities_latin: false,
    htmlDecodeOutput:true
  });
  CKEDITOR.disableAutoInline = true;
  CKEDITOR.inline('editable');
</script>
<script type="text/javascript">
  var ckeditor = CKEDITOR.replace('editor1',{
    entities: false,
    basicEntities: false,
    entities_greek: false,
    entities_latin: false,
    htmlDecodeOutput:true
  });
  CKEDITOR.disableAutoInline = true;
  CKEDITOR.inline('editable');
</script>
<script>
    function confirm_delete(delete_url){
      $("#modal_delete").modal('show', {backdrop: 'static'});
      document.getElementById('delete_link').setAttribute('href', delete_url);
    }
     $('#datepicker').datetimepicker({
      format: 'DD MMMM YYYY'
    });
     $('#datepicke').datetimepicker({
      format: 'DD MMMM YYYY'
    });
</script>
<script type="text/javascript">
    $("#timepicker").timepicker({
      showInputs: false
    });
    $("#timepicke").timepicker({
      showInputs: false
    });
</script>
<script type="text/javascript">
  $(window).load(function() {
        $(".loader").fadeOut("slow");
  });
</script>
  </body>
</html>
