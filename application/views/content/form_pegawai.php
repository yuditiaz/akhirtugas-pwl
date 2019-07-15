<?php
  if($status == 'edit'){
    $val=$hsl->row_array();
    $nomot=$val['id_pegawai'];
    $hd='';
  }else{
    $query=$this->db->order_by('id_pegawai','DESC')->get('tb_pegawai');
  $data=$query->row();
  if(empty($data->id_pegawai)){
    $nomot="IDE101";
  }else{
    $kode=$data->id_pegawai;
    $ambil=substr($kode,3,3);
    $jumlah=$ambil+1;
    $nomot="IDE".$jumlah;
  }
    $val['id_pegawai']="";
    $val['nama_pegawai']="";
    $val['alamat']="";
    $val['jk']="";
    $val['no_hp']="";
    $val['nik_ktp']="";
    $hd='hidden';
  }
?>
<section class="content-header">
      <h1>
        Input Data Pembeli
        <small>Input Data Pembeli</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Input Data Pembeli</a></li>
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
                  <input type="hidden" name="id_pegawai" class="form-control" value="<?php echo $nomot;?>" required>
                <!-- </div>
              </div> -->
              <div class="form-group">
                <label class="col-sm-2">Nama Pegawai</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_pegawai" class="form-control" value="<?php echo $val['nama_pegawai'];?>" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2">Alamat Pegawai</label>
                <div class="col-sm-10">
                 <textarea id="editor" name="alamat" cols="45" rows="5" class="form-control"><?php echo htmlentities($val['alamat']);?></textarea>
                </div>
              </div>
             <div class="form-group">
                <label class="col-sm-2">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <select name="jk" class="form-control">
                    <option>--Pilih--</option>
                    <option <?php if($val['jk']=="Laki-laki"){echo "selected";}?>>Laki-laki</option>
                    <option <?php if($val['jk']=="Perempuan"){echo "selected";}?>>Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2">No HP</label>
                <div class="col-sm-10">
                  <input type="text" name="no_hp" class="form-control" value="<?php echo $val['no_hp'];?>" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2">NIK KTP</label>
                <div class="col-sm-10">
                  <input type="text" name="nik_ktp" class="form-control" value="<?php echo $val['nik_ktp'];?>" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4">
                </div>
                <div class="col-sm-5">
                  <button type="submit" name="<?php echo $value;?>" class="btn btn-success btn-md col-sm-12"><i class="fa fa-save"></i><?php echo $value;?></button>
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
     