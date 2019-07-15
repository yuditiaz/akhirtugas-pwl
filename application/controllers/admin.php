	<?php 
	class admin extends CI_Controller{
		function __construct(){
			parent:: __construct();
			$this->load->model('model_admin');
		}
		function page(){
			$page=$this->uri->segment(3);
			if (empty($page)) {
				$page='home';
			}
			$data['page']=$page;
			if($page=='tb_login'){
				$data['tamp_login']=$this->model_admin->qw("*","tb_login","")->result();
				$this->load->view('index',$data);
			}elseif($page=='tb_pembeli'){
				$data['tamp_pembeli']=$this->model_admin->qw("*","tb_pembeli","")->result();
				$this->load->view('index',$data);
			}elseif($page=='tb_pegawai'){
				$data['tamp_pegawai']=$this->model_admin->qw("*","tb_pegawai","")->result();
				$this->load->view('index',$data);
			}elseif($page=='tb_motor'){
				$data['tamp_motor']=$this->db->join('tb_pegawai h','h.id_pegawai=u.id_pegawai')->get('tb_motor u')->result();
				$this->load->view('index',$data);
			}elseif($page=='tb_transaksi'){
				$data['tamp_transaksi']=$this->db->join('tb_pembeli h','h.id_pembeli=u.id_pembeli','tb_motor p','p.id_motor=u.id_motor')->get('tb_pembelian u')->result();
				$this->load->view('index',$data);
			}
			elseif($page=='form_login'){
				$yy=$this->uri->segment(4);
				if (empty($yy)) {
					$data['status']='simpan';
					$data['value']='Simpan';
					$data['open']='admin/simpan_login';
					$data['hid']='hidden';
					$data['type']='text';
				}else{
					$data['status']='edit';
					$data['hid']='';
					$data['value']='Edit';
					$data['open']='admin/edit_login';
					$data['type']='text';
					$data['hsl']=$this->model_admin->qw("*","tb_login","WHERE id_login ='$yy'");
				}
				$this->load->view('index',$data);
			}elseif($page=='form_pegawai'){
				$yy=$this->uri->segment(4);
				if (empty($yy)) {
					$data['status']='simpan';
					$data['value']='Simpan';
					$data['open']='admin/simpan_pegawai';
					$data['hid']='hidden';
					$data['type']='text';
				}else{
					$data['status']='edit';
					$data['hid']='';
					$data['value']='Edit';
					$data['open']='admin/edit_pegawai';
					$data['type']='text';
					$data['hsl']=$this->model_admin->qw("*","tb_pegawai","WHERE id_pegawai ='$yy'");
				}
				$this->load->view('index',$data);
			}elseif($page=='form_transaksi'){
				$yy=$this->uri->segment(4);
				if (empty($yy)) {
					$data['status']='simpan';
					$data['value']='Simpan';
					$data['open']='admin/simpan_transaksi';
					$data['hid']='hidden';
					$data['type']='text';
				}
				$this->load->view('index',$data);
			}
			elseif($page=='form_pembeli'){
				$yy=$this->uri->segment(4);
				if (empty($yy)) {
					$data['status']='simpan';
					$data['value']='Simpan';
					$data['open']='admin/simpan_pembeli';
					$data['hid']='hidden';
					$data['type']='text';
				}else{
					$data['status']='edit';
					$data['hid']='';
					$data['value']='Edit';
					$data['open']='admin/edit_pembeli';
					$data['type']='text';
					$data['hsl']=$this->model_admin->qw("*","tb_pembeli","WHERE id_pembeli ='$yy'");
				}
				$this->load->view('index',$data);
			}elseif($page=='form_motor'){
				$yy=$this->uri->segment(4);
				if (empty($yy)) {
					$data['status']='simpan';
					$data['value']='Simpan';
					$data['open']='admin/simpan_motor';
					$data['hid']='hidden';
					$data['type']='text';
				}else{
					$data['status']='edit';
					$data['hid']='';
					$data['value']='Edit';
					$data['open']='admin/edit_motor';
					$data['type']='text';
					$data['hsl']=$this->model_admin->qw("*","tb_motor","WHERE id_motor ='$yy'");
				}
				$this->load->view('index',$data);
			}
			elseif($page=='detail_pembeli'){
				$yy=$this->uri->segment(4);
				if (empty($yy)) {
					$data['status']='simpan';
					$data['value']='Simpan';
					$data['open']='admin/simpan_pembeli';
					$data['hid']='hidden';
					$data['type']='text';
				}else{
					$data['status']='edit';
					$data['hid']='';
					$data['value']='Edit';
					$data['open']='admin/edit_pembeli';
					$data['type']='text';
					$data['hsl']=$this->model_admin->qw("*","tb_pembeli","WHERE id_pembeli ='$yy'");
				}
				$this->load->view('index',$data);
			}else{
				$this->load->view('index',$data);	
			}
		}

		function cari_pembeli(){
				if($_POST['status']=='tamp_pembeli'){
				$kirim_pembeli=$this->input->post('id');
				$query=$this->db->where('id_pembeli',$kirim_pembeli)->get('tb_pembeli');
				$field=$query->row();
				$hasilnya=array('id_pembeli'=>$field->id_pembeli,'nama_pembeli'=>$field->nama_pembeli,'no_hp'=>$field->no_hp,'nik_ktp'=>$field->nik_ktp);
				echo json_encode($hasilnya);
			}
		}
		function cari_motor(){
				if($_POST['status']=='tamp_motor'){
				$kirim_pembeli=$this->input->post('id');
				$query=$this->db->where('id_motor',$kirim_pembeli)->get('tb_motor');
				$field=$query->row();
				$hasilnya=array('id_motor'=>$field->id_motor,'merk_motor'=>$field->merk_motor,'warna_motor'=>$field->warna_motor,'harga_motor'=>$field->harga_motor);
				echo json_encode($hasilnya);
			}
		}

		function simpan_login(){
			$ary=array(
				'id_login' 		 => $this->input->post('id_login'),
				'username'		 => $this->input->post('username'),
				'password'		 => $this->input->post('password'),
				'level'		 	 => $this->input->post('level')
			);
			$this->model_admin->simpan_login('tb_login',$ary);
			redirect('admin/page/tb_login');
		}
		function simpan_transaksi(){
		if ($this->input->post('merk_motor') == "Honda" && $this->input->post('warna_motor') == "Putih") {
			$bonus = "Mendapatakan Helm";
		}else if($this->input->post('merk_motor') == "Honda" && $this->input->post('warna_motor') == "Hitam"){
			$bonus = "Mendapatakan Jaket";
		}else if($this->input->post('merk_motor') == "Honda" && $this->input->post('warna_motor') == "Merah"){
			$bonus = "Mendapatakan Sepatu";
		}else if($this->input->post('merk_motor') == "Yamaha" && $this->input->post('warna_motor') == "Putih"){
			$bonus = "Mendapatakan Jas Hujan";
		}else if($this->input->post('merk_motor') == "Yamaha" && $this->input->post('warna_motor') == "Hitam"){
			$bonus = "Mendapatakan Celana Yamaha";
		}else if($this->input->post('merk_motor') == "Yamaha" && $this->input->post('warna_motor') == "Merah"){
			$bonus = "Mendapatakan Sound Yamaha";
		}else if($this->input->post('merk_motor') == "Suzuki" && $this->input->post('warna_motor') == "Putih"){
			$bonus = "Mendapatakan HP";
		}else if($this->input->post('merk_motor') == "Suzuki" && $this->input->post('warna_motor') == "Hitam"){
			$bonus = "Mendapatakan Jaket Suzuki";
		}else if($this->input->post('merk_motor') == "Suzuki" && $this->input->post('warna_motor') == "Merah"){
			$bonus = "Mendapatakan Tas Suzuki";
		}else if($this->input->post('merk_motor') == "Kawasaki" && $this->input->post('warna_motor') == "Putih"){
			$bonus = "Mendapatakan Jaket dan Helm";
		}else if($this->input->post('merk_motor') == "Kawasaki" && $this->input->post('warna_motor') == "Hitam"){
			$bonus = "Mendapatakan Tas dan Rompi";
		}else if($this->input->post('merk_motor') == "Kawasaki" && $this->input->post('warna_motor') == "Merah"){
			$bonus = "Mendapatakan Laptop";
		}
		$ary=array(
				'id_pembelian' 		 => $this->input->post('id_pembelian'),
				'id_pembeli'		 => $this->input->post('id_pembeli'),
				'id_motor'		 => $this->input->post('id_motor'),
				'tgl_pembelian'		 	 => $this->input->post('tgl_pembelian'),
				'jumlah_bayar' => $this->input->post('jumlah_bayar'),
				'bonus' => $bonus,
				'kembalian' => $this->input->post('kembalian')
			);
			$this->model_admin->simpan_transaksi('tb_pembelian',$ary);
			redirect('admin/page/tb_pembelian');

		
		}

		function edit_login(){
			$id=$this->input->post('id_login');
			$ary=array(
				'id_login' 		 => $this->input->post('id_login'),
				'username'		 => $this->input->post('username'),
				'password'		 => $this->input->post('password'),
				'level'			 => $this->input->post('level')
			);
			$this->model_admin->edit_login('tb_login',$id,$ary);
			redirect('admin/page/tb_login');
		}

		function hapus_login($id_login){
			$this->db->where('id_login',$id_login);
			$this->model_admin->hapus_login('tb_login',$id_login);
			redirect('admin/page/tb_login');
		}
		function simpan_motor(){
			$ary=array(
				'id_motor' 		 => $this->input->post('id_motor'),
				'id_pegawai'		 => $this->input->post('id_pegawai'),
				'merk_motor'	 => $this->input->post('merk_motor'),
				'no_polisi'		 => $this->input->post('no_polisi'),
				'tahun_pembuatan'				 => $this->input->post('tahun_pembuatan'),
				'warna_motor'		 	 => $this->input->post('warna_motor'),
				'no_mesin'				 => $this->input->post('no_mesin'),
				'jumlah_motor'				 => $this->input->post('jumlah_motor'),
				'harga_motor'		 	 => $this->input->post('harga_motor')
			);
			$this->model_admin->simpan_motor('tb_motor',$ary);
			redirect('admin/page/tb_motor');
		}
		function edit_motor(){
			$id=$this->input->post('id_motor');
			$ary=array(
				'id_motor' 		 => $this->input->post('id_motor'),
				'id_pegawai'		 => $this->input->post('id_pegawai'),
				'merk_motor'	 => $this->input->post('merk_motor'),
				'no_polisi'		 => $this->input->post('no_polisi'),
				'tahun_pembuatan'				 => $this->input->post('tahun_pembuatan'),
				'warna_motor'		 	=> $this->input->post('warna_motor'),
				'no_mesin'				=> $this->input->post('no_mesin'),
				'jumlah_motor'				 => $this->input->post('jumlah_motor'),
				'harga_motor'		 	 => $this->input->post('harga_motor')
			);
			$this->model_admin->edit_motor('tb_motor',$id,$ary);
			redirect('admin/page/tb_motor');
		}
		function simpan_pembeli(){
			$ary=array(
				'id_pembeli' 		 => $this->input->post('id_pembeli'),
				'nama_pembeli'		 => $this->input->post('nama_pembeli'),
				'alamat_pembeli'	 => $this->input->post('alamat_pembeli'),
				'jk_pembeli'		 => $this->input->post('jk_pembeli'),
				'no_hp'				 => $this->input->post('no_hp'),
				'nik_ktp'		 	 => $this->input->post('nik_ktp'),
				'email'				 => $this->input->post('email'),
				'umur'				 => $this->input->post('umur'),
				'status'		 	 => $this->input->post('status')
			);
			$this->model_admin->simpan_pembeli('tb_pembeli',$ary);
			redirect('admin/page/tb_pembeli');
		}
		function edit_pembeli(){
			$id=$this->input->post('id_pembeli');
			$ary=array(
				'id_pembeli' 		 => $this->input->post('id_pembeli'),
				'nama_pembeli'		 => $this->input->post('nama_pembeli'),
				'alamat_pembeli'	 => $this->input->post('alamat_pembeli'),
				'jk_pembeli'		 => $this->input->post('jk_pembeli'),
				'no_hp'				 => $this->input->post('no_hp'),
				'nik_ktp'		 	 => $this->input->post('nik_ktp'),
				'email'				 => $this->input->post('email'),
				'umur'				 => $this->input->post('umur'),
				'status'		 	 => $this->input->post('status')
			);
			$this->model_admin->edit_pembeli('tb_pembeli',$id,$ary);
			redirect('admin/page/tb_pembeli');
		}
		function hapus_pembeli($id_pembeli){
			$this->db->where('id_pembeli',$id_pembeli);
			$this->model_admin->hapus_pembeli('tb_pembeli',$id_pembeli);
			redirect('admin/page/tb_pembeli');
		}
		function hapus_pembelian($id_pembelian){
			$this->db->where('id_pembelian',$id_pembelian);
			$this->model_admin->hapus_pembelian('tb_pembelian',$id_pembelian);
			redirect('admin/page/tb_transaksi');
		}
		function hapus_motor($id_motor){
			$this->db->where('id_motor',$id_motor);
			$this->model_admin->hapus_motor('tb_motor',$id_motor);
			redirect('admin/page/tb_motor');
		}
		function simpan_pegawai(){
			$ary=array(
				'id_pegawai' 		=> $this->input->post('id_pegawai'),
				'nama_pegawai'		=> $this->input->post('nama_pegawai'),
				'alamat'	 		=> $this->input->post('alamat'),
				'jk'		 		=> $this->input->post('jk'),
				'no_hp'				=> $this->input->post('no_hp'),
				'nik_ktp'		 	=> $this->input->post('nik_ktp')
				);
			$this->model_admin->simpan_pegawai('tb_pegawai',$ary);
			redirect('admin/page/tb_pegawai');
		}
		function edit_pegawai(){
			$id=$this->input->post('id_pegawai');
			$ary=array(
				'id_pegawai' 		=> $this->input->post('id_pegawai'),
				'nama_pegawai'		=> $this->input->post('nama_pegawai'),
				'alamat'	 		=> $this->input->post('alamat'),
				'jk'		 		=> $this->input->post('jk'),
				'no_hp'				=> $this->input->post('no_hp'),
				'nik_ktp'		 	=> $this->input->post('nik_ktp')
			);
			$this->model_admin->edit_pegawai('tb_pegawai',$id,$ary);
			redirect('admin/page/tb_pegawai');
		}
		function hapus_pegawai($id_pegawai){
			$this->db->where('id_pegawai',$id_pegawai);
			$this->model_admin->hapus_pegawai('tb_pegawai',$id_pegawai);
			redirect('admin/page/tb_pegawai');
		}
	}
	?> 