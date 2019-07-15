<section class="content-header">
      <h1>
        Tabel
        <small>Data Transaksi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tabel Transaksi</a></li>
      </ol>
</section>
<section class="content" style="margin-top: 10px;">
      <div class="row">
            <div class="col-xs-12">
              <div class="box box-success">
                <div class="box-header">
                    <div class="panel panel-success">
                       <div class="box-header">
                  <a href="<?php echo site_url('admin/page/form_transaksi');?>"><button class="btn btn-success" type="button" style="margin-top: 10px;"><i class="fa fa-plus"></i> Tambah Data</button></a>
                </div>
  </div>       
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">

          <table id="datatable" class="table table-bordered table-striped table-scalable">
              
        <thead>
          <tr>
            <th>ID Transaksi</th>
            <th>Nama Pembeli</th>
            <th>Merk Motor</th>
            <th>Tanggal Beli</th>
            <th>Jumlah Bayar</th>
            <th>Bonus</th>
            <th>Kembalian</th>
            <th>Acton</th>
          </tr>
        </thead>
        <tbody>
          <?php
                $no=1;
                foreach($tamp_transaksi as $tampil){    
          ?>
          <tr>
            <td><?php echo $tampil->id_pembelian;?></td>
            <td><?php echo $tampil->id_pembeli;?></td>
            <td><?php echo $tampil->id_motor;?></td>
            <td><?php echo $tampil->tgl_pembelian;?></td>
            <td><?php echo $tampil->jumlah_bayar;?></td>
            <td><?php echo $tampil->bonus;?></td>
            <td><?php echo $tampil->kembalian;?></td>
            <td>
          <a href="#" onClick='confirm_delete("<?php echo site_url('admin/hapus_pembelian');?>/<?php echo $tampil->id_pembelian;?>")' class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>       
            </td>
          </tr>
          <?php
            $no++;}
          ?>
        </tbody>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->           
    </section><!-- /.content -->
     <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <!-- <div class="modal-body">
          <div class="form-group">
            <?php $open = site_url('admin/upload_sis');?>
            <?php echo form_open_multipart($open);?>
            <div class="col-md-6">
            <input type="file" name="file" class="form-control">
            </div>
            <div class="col-md-6">
            <input type="submit" name="import" value="Upload" class="btn btn-primary">
            </div>
            <?php echo form_close();?>
          </div>
        </div> -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
    <div class="modal fade" id="modal_delete">
      <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="text-align:center;">Apakah anda yakin ingin menghapus data ini ?</h4>
          </div>    
          <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
            <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
            <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>