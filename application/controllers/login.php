<?php 
	class login extends CI_Controller{
		function __construct(){
			parent:: __construct();
			$this->load->model('model_login');
		}
		function index(){
			$this->load->view('login');
		}

		function aksi_login(){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$where=array(
				'username' =>$username,
				'password' =>$password,
			);
			$cek=$this->model_login->cek_login('tb_login',$where)->num_rows();
			$query=$this->db->where('username',$username)->get('tb_login');
			$row=$query->row();
				if ($cek > 0) {
					$data_session=array(
						'username' => $row->username,
						'level'	   => $row->level,
						'status' =>'login'
					);
				$this->session->set_userdata($data_session);
				redirect('admin/page');
				}else{
					echo "<script> alert('Maaf Username atau password salah') </script>";
					echo "<script> document.location='../login' </script>";
				}
		}
		function logout(){
			$this->session->sess_destroy();
			redirect('login');
		}
	}
?>