<section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>
        <section class="content">
           <div class="row">
            <div class="col-xs-12">
              <div class="box box-success">
                <div class="box-body">
                <div class="kotak" >
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner" style="text-align: center;">
					<?php
                    $tuser=$this->model_admin->qw("*","tb_login","")->num_rows();
                  ?>
              <h3><?php echo $tuser;?></h3>

              <p>Data Login</p>
            </div>
            <a href="<?php echo site_url('admin/page/tb_login');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner" style="text-align: center;">
              <?php
                    $tuser=$this->model_admin->qw("*","tb_motor","")->num_rows();
                  ?>
              <h3><?php echo $tuser;?></h3>


              <p>Data Motor</p>
            </div>
            <a href="<?php echo site_url('admin/page/tb_motor');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner" style="text-align: center;">
             
              <h3>1</h3>


              <p>Data Pegawai</p>
            </div>
            <div class="icon">
              <i class="ion-alarm"></i>
            </div>
            <a href="<?php echo site_url('admin/page/tb_pegawai');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
         <div class="col-lg-3 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner" style="text-align: center;">
               <?php
                    $tuser=$this->model_admin->qw("*","tb_pembeli","")->num_rows();
                  ?>
              <h3><?php echo $tuser;?></h3>


              <p>Data Pembeli</p>
            </div>
            <div class="icon">
              <i class="ion-alarm"></i>
            </div>
            <a href="<?php echo site_url('admin/page/tb_pembeli');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <!-- Main row -->    
        </section><!-- /.content -->