<?php
  if($status == 'edit'){
    $val=$hsl->row_array();
    $nomot=$val['id_pembelian'];
    $hd='';
  }else{
    $query=$this->db->order_by('id_pembelian','DESC')->get('tb_pembelian');
  $data=$query->row();
  if(empty($data->id_pembelian)){
    $nomot="IDA101";
  }else{
    $kode=$data->id_pembelian;
    $ambil=substr($kode,3,3);
    $jumlah=$ambil+1;
    $nomot="IDA".$jumlah;
  }
    $val['id_motor']="";
    $val['id_pembeli']="";
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
<script type="text/javascript">
  function cari_pembeli(v){
    if(v=="tamp_pembeli"){
      $.ajax({
        url:"http://localhost/sim_jual_motor/index.php/admin/cari_pembeli",
        type:"POST",
        dataType:"json",
        data:{
          status:v,
          id:$("#id_pembeli").val()
        },
        success:function(hasil){
          $("#id_pembeli").val(hasil.id_pembeli);
        $("#nama_pembeli").val(hasil.nama_pembeli);
          $("#no_hp").val(hasil.no_hp);
          $("#nik_ktp").val(hasil.nik_ktp);
        }
      });
    }
  }
  function cari_motor(v){
    if(v=="tamp_motor"){
      $.ajax({
        url:"http://localhost/sim_jual_motor/index.php/admin/cari_motor",
        type:"POST",
        dataType:"json",
        data:{
          status:v,
          id:$("#id_motor").val()
        },
        success:function(hasil){
          $("#id_motor").val(hasil.id_motor);
          $("#merk_motor").val(hasil.merk_motor);
          $("#warna_motor").val(hasil.warna_motor);
          $("#harga_motor").val(hasil.harga_motor);
        }
      });
    }
  }
  function subtotal(){
    var a=$("#harga_motor").val();
    var b=$("#jumlah_bayar").val();
    var c=b-a;
    $("#kembalian").val(c);
  }
</script>
<section class="content-header">
      <h1>
        Input Data Penjualan Motor
        <small>Input Data Penjualan Motor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Input Data Penjualan Motor</a></li>
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
            <div class="col-md-3">
              <div class="form-group">
                 <input type="hidden" name="id_pembelian" id="id_pembelian" cols="45" rows="5" class="form-control" required readonly="" value="<?php echo $nomot;?>" >
                <label control-label>ID Pembeli</label>
                <select name="id_pembeli" id="id_pembeli" class="form-control" onchange="cari_pembeli('tamp_pembeli')">
                    <option>--Pilih--</option>
                     <?php
                    $qw=$this->db->get('tb_pembeli')->result();
                    foreach($qw as $tampil){
                  ?>
                    <option <?php if($tampil->id_pembeli==$val['id_pembeli']){echo "selected";}?> value="<?php echo $tampil->id_pembeli;?>"><?php echo $tampil->id_pembeli;?></option>
                     <?php
                    }
                  ?>
                  </select>
          </div>
          <!-- /.row -->
        </div>
        <div class="col-md-3">
              <div class="form-group">
                <label control-label>Nama Pembeli</label>
               <input type="text" name="nama_pembeli" id="nama_pembeli" cols="45" rows="5" class="form-control" >
              </div>
            </div>
         <div class="col-md-3">
          <div class="form-group">
            <label control-label>No HP</label>
           <input type="text" name="no_hp" id="no_hp" cols="45" rows="5" class="form-control" >
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label control-label>No KK</label>
           <input type="text" name="nik_ktp" id="nik_ktp" cols="45" rows="5" class="form-control" >
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <br>
      <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label control-label>ID Motor</label>
                <select name="id_motor" id="id_motor" class="form-control" onchange="cari_motor('tamp_motor')">
                    <option>--Pilih--</option>
                     <?php
                    $qw=$this->db->get('tb_motor')->result();
                    foreach($qw as $tampil){
                  ?>
                    <option <?php if($tampil->id_motor==$val['id_motor']){echo "selected";}?> value="<?php echo $tampil->id_motor;?>"><?php echo $tampil->id_motor;?></option>
                     <?php
                    }
                  ?>
                  </select>
          </div>
          <!-- /.row -->
        </div>
        <div class="col-md-3">
              <div class="form-group">
                <label control-label>Merk Motor</label>
               <input type="text" name="merk_motor" id="merk_motor" cols="45" rows="5" class="form-control">
              </div>
            </div>
         <div class="col-md-3">
          <div class="form-group">
            <label control-label>Warna Motor</label>
           <input type="text" name="warna_motor" id="warna_motor" cols="45" rows="5" class="form-control">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label control-label>Harga Motor</label>
           <input type="text" name="harga_motor" id="harga_motor" cols="45" rows="5" class="form-control">
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <br>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label control-label>Tanggal Pembelian</label>
            <input type="date" name="tgl_pembelian" id="tgl_pembelian" style="color:#000; font-weight: bold;" cols="45" rows="5" class="form-control" required="">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label control-label>Jumlah Bayar</label>
            <input type="text" name="jumlah_bayar" id="jumlah_bayar" cols="45" rows="5" class="form-control" required="" onkeyup="subtotal()">
          </div>
        </div>
         <div class="col-md-3">
          <div class="form-group">
            <label control-label>Kembalian Uang</label>
            <input type="text" name="kembalian" id="kembalian" cols="45" rows="5" class="form-control" required="">
            <input type="hidden" name="bonus" id="bonus" cols="45" rows="5" class="form-control" required="">
          </div>
        </div>
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
        </section><!-- /.content -->
     