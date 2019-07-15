<?php
  if($status == 'edit'){
    $val=$hsl->row_array();
    $nomot=$val['id_motor'];
    $hd='';
  }else{
    $query=$this->db->order_by('id_motor','DESC')->get('tb_motor');
  $data=$query->row();
  if(empty($data->id_motor)){
    $nomot="IDM101";
  }else{
    $kode=$data->id_motor;
    $ambil=substr($kode,3,3);
    $jumlah=$ambil+1;
    $nomot="IDM".$jumlah;
  }
    $val['id_motor']="";
    $val['id_pegawai']="";
    $val['merk_motor']="";
    $val['no_polisi']="";
    $val['tahun_pembuatan']="";
    $val['warna_motor']="";
    $val['no_mesin']="";
    $val['jumlah_motor']="";
    $val['harga_motor']="";
    $hd='hidden';
  }
?>
<section class="content-header">
      <h1>
        Input Data Motor
        <small>Input Data Motor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Input Data Motor</a></li>
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
              <!-- <div class="form-group">
                <label class="col-sm-2">ID Slide Show</label>
                <div class="col-sm-10"> -->
                  <input type="hidden" name="id_motor" class="form-control" value="<?php echo $nomot;?>" required>
                <!-- </div>
              </div> -->
              <div class="form-group">
                <label class="col-sm-2">Nama Pegawai</label>
                <div class="col-sm-10">
                  <select name="id_pegawai" class="form-control">
                    <option>--Pilih--</option>
                     <?php
                    $qw=$this->db->get('tb_pegawai')->result();
                    foreach($qw as $tampil){
                  ?>
                    <option <?php if($tampil->id_pegawai==$val['id_pegawai']){echo "selected";}?> value="<?php echo $tampil->id_pegawai;?>"><?php echo $tampil->nama_pegawai;?></option>
                     <?php
                    }
                  ?>
                  </select>
                </div>
              </div>
             <div class="form-group">
                <label class="col-sm-2">Merk Motor</label>
                <div class="col-sm-10">
                  <select name="merk_motor" class="form-control">
                    <option>--Pilih--</option>
                    <option <?php if($val['merk_motor']=="Yamaha"){echo "selected";}?>>Yamaha</option>
                    <option <?php if($val['merk_motor']=="Honda"){echo "selected";}?>>Honda</option>
                    <option <?php if($val['merk_motor']=="Suzuki"){echo "selected";}?>>Suzuki</option>
                    <option <?php if($val['merk_motor']=="Kawasaki"){echo "selected";}?>>Kawasaki</option>
                  </select>
                </div>
              </div>
             
              <div class="form-group">
                <label class="col-sm-2">No Polisi</label>
                <div class="col-sm-10">
                  <input type="text" name="no_polisi" class="form-control" value="<?php echo $val['no_polisi'];?>" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2">Tahun Kendaraan</label>
                <div class="col-sm-10">
                  <input type="text" name="tahun_pembuatan" class="form-control" value="<?php echo $val['tahun_pembuatan'];?>" required>
                </div>
              </div>

               <div class="form-group">
                <label class="col-sm-2">Warna Motor</label>
                <div class="col-sm-10">
                  <select name="warna_motor" class="form-control">
                    <option>--Pilih--</option>
                    <option <?php if($val['warna_motor']=="Yamaha"){echo "selected";}?>>Putih</option>
                    <option <?php if($val['warna_motor']=="Honda"){echo "selected";}?>>Hitam</option>
                    <option <?php if($val['warna_motor']=="Kawasaki"){echo "selected";}?>>Merah</option>
                  </select>
                </div>
              </div>
 
              <div class="form-group">
                <label class="col-sm-2">No Mesin</label>
                <div class="col-sm-10">
                  <input type="text" name="no_mesin" class="form-control" value="<?php echo $val['no_mesin'];?>" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2">Jumlah Motor</label>
                <div class="col-sm-10">
                  <input type="text" name="jumlah_motor" class="form-control" value="<?php echo $val['jumlah_motor'];?>" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2">Harga Motor</label>
                <div class="col-sm-10">
                  <input type="text" name="harga_motor" class="form-control" value="<?php echo $val['harga_motor'];?>" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-5">
                  <button type="submit" name="<?php echo $value;?>" class="btn btn-success btn-md col-sm-12"><i class="fa fa-save"></i><?php echo $value;?></button>
                </div>
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
     