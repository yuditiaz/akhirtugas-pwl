<?php
  if($status == 'edit'){
    $val=$hsl->row_array();
    $nomot=$val['id_pembeli'];
    $hd='';
  }else{
    $query=$this->db->order_by('id_pembeli','DESC')->get('tb_pembeli');
  $data=$query->row();
  if(empty($data->id_pembeli)){
    $nomot="IDP101";
  }else{
    $kode=$data->id_pembeli;
    $ambil=substr($kode,3,3);
    $jumlah=$ambil+1;
    $nomot="IDP".$jumlah;
  }
    $val['id_pembeli']="";
    $val['nama_pembeli']="";
    $val['alamat_pembeli']="";
    $val['jk_pembeli']="";
    $val['no_hp']="";
    $val['nik_ktp']="";
    $val['email']="";
    $val['umur']="";
    $val['status']="";
    $hd='hidden';
  }
?>
<section class="content-header">
      <h1>
        Detail Data Pembeli
        <small>Detail Data Pembeli</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Detail Data Pembeli</a></li>
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
                  <input type="hidden" name="id_pembeli" class="form-control" value="<?php echo $nomot;?>" required readonly>
                <!-- </div>
              </div> -->
              <div class="form-group">
                <label class="col-sm-2">Nama Pembeli</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_pembeli" class="form-control" value="<?php echo $val['nama_pembeli'];?>" required readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2">Alamat Pembeli</label>
                <div class="col-sm-10">
                 <textarea id="editor" name="alamat_pembeli" cols="45" rows="5" class="form-control" readonly><?php echo htmlentities($val['alamat_pembeli']);?></textarea>
                </div>
              </div>
             <div class="form-group">
                <label class="col-sm-2">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <select name="jk_pembeli" class="form-control" readonly>
                    <option>--Pilih--</option>
                    <option <?php if($val['jk_pembeli']=="Laki-laki"){echo "selected";}?>>Laki-laki</option>
                    <option <?php if($val['jk_pembeli']=="Perempuan"){echo "selected";}?>>Perempuan</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2">No HP</label>
                <div class="col-sm-10">
                  <input type="text" name="no_hp" class="form-control" value="<?php echo $val['no_hp'];?>" required readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2">NIK KTP</label>
                <div class="col-sm-10">
                  <input type="text" name="nik_ktp" class="form-control" value="<?php echo $val['nik_ktp'];?>" required readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2">Email</label>
                <div class="col-sm-10">
                  <input type="text" name="email" class="form-control" value="<?php echo $val['email'];?>" required readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2">Umur</label>
                <div class="col-sm-10">
                  <input type="text" name="umur" class="form-control" value="<?php echo $val['umur'];?>" required readonly>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2">Status Pembeli</label>
                <div class="col-sm-10">
                  <select name="status" class="form-control" readonly>
                    <option>--Pilih--</option>
                    <option <?php if($val['status']=="Kerja"){echo "selected";}?>>Kerja</option>
                    <option <?php if($val['status']=="Tidak Kerja"){echo "selected";}?>>Tidak Kerja</option>
                    <option <?php if($val['status']=="Pelajar"){echo "selected";}?>>Pelajar</option>
                  </select>
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
     