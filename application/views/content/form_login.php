<?php
  if($status == 'edit'){
    $val=$hsl->row_array();
  }else{
    $val['id_login']="";
    $val['username']="";
    $val['password']="";
    $val['level']="";
  }
?>
<section class="content-header">
      <h1>
        Form Login
        <small>Form Login</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Form Login</a></li>
        <li><a href="#">Form Login</a></li>
      </ol>
    </section>
        <section class="content">
           <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <?php echo form_open_multipart($open);?>
        <div class="box-body">
          <div class="row">
            <div class="form-horizontal">
            <div class="col-md-12">
              <div class="form-group">
                <label class="col-sm-4 control-label">Username</label>
                <div class="col-sm-5">
                  <input type="text" name="username" class="form-control " value="<?php echo $val['username'];?>" >
                   <input type="hidden" name="id_login" class="form-control " value="<?php echo $val['id_login'];?>" >
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Password</label>
                <div class="col-sm-5">
                <input type="text" name="password" class="form-control" value="<?php echo $val['password'];?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Level</label>
                <div class="col-sm-5">
                  <select name="level" class="form-control">
                    <option>--Pilih--</option>
                    <option <?php if($val['level']=="Admin"){echo "selected";}?>>Admin</option>
                    <option <?php if($val['level']=="User"){echo "selected";}?>>User</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-5">
                  <button type="submit" name="<?php echo $value;?>" class="btn btn-success btn-md col-sm-12"><i class="fa fa-save"></i> Simpan</button>
                </div>
              </div>
              <?php echo form_close();?>
              <!-- /.form-group -->
            <!-- /.col -->
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>      
        </section><!-- /.content -->
     