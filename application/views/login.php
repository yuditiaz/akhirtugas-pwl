<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ADMIN SIPM</title>
	<!-- Icon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>/assets/gambar/logo.png" type="image/icon" href="favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fa/css/font-awesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/sweetalert.css">

  </head>
  <body class="hold-transition login-page">
    <?php echo form_open('login/aksi_login');?>
    <div class="login-box">
     <!-- /.login-logo -->
      <div class="login-box-body">
        <b><p class="login-box-msg" style="background-color: #eee;margin-top: 20px;"><img src="<?php echo base_url();?>/assets/gambar/logo.png" style="width: 100px;">
          <br>
          <br>
        <br>
        <span>Sistem Informasi Penjualan Motor</span>
        </p></b><br>
        <form action="vl_user.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username" maxlength="30" />
            <span class="form-control-feedback"><i class="fa fa-user"></i></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password" maxlength="255" />
            <span class="form-control-feedback"><i class="fa fa-unlock"></i></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-success" style="width: 100%;">LOGIN</i></button>
            </div><!-- /.col -->
          </div>
      <br>
      <center><font style="color:red;" id="salah">Username atau password salah</font></center>
      <center><font style="color:green;"></font></center>
    </br>
        </form>
    <p align="center">Copyright By @Basecamp</p>
      </div><!-- /.login-box-body -->
      
    </div><!-- /.login-box -->

    <?php echo form_close();?>

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url();?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/dist/sweetalert.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/dist/sweetalert-dev.js"></script>

    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
    <script type="text/javascript">
  $(document).ready(function(){
    $("#salah").hide();
  });
</script>
<script type="text/javascript">
  swal({
  icon: "success",
});
</script>
  </body>
</html>
