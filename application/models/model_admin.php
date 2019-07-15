<?php
	class model_admin extends CI_Model{
		function __construct(){
			parent:: __construct();
		}
		function qw($cel,$table,$prop){
			return $this->db->query("SELECT $cel FROM $table $prop");
		}
		function simpan_login($table,$value){
			return $this->db->insert($table,$value);
		}
		function simpan_transaksi($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_login($table,$where,$value){
			$this->db->where('id_login',$where);
			return $this->db->update($table,$value);
		}
		function edit_motor($table,$where,$value){
			$this->db->where('id_motor',$where);
			return $this->db->update($table,$value);
		}
		function hapus_login($table,$property){
			$this->db->where('id_login',$property);
			return $this->db->delete($table);
		}
		function hapus_pembelian($table,$property){
			$this->db->where('id_pembelian',$property);
			return $this->db->delete($table);
		}
		function hapus_motor($table,$property){
			$this->db->where('id_motor',$property);
			return $this->db->delete($table);
		}
		function simpan_pembeli($table,$value){
			return $this->db->insert($table,$value);
		}
		function simpan_motor($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_pembeli($table,$where,$value){
			$this->db->where('id_pembeli',$where);
			return $this->db->update($table,$value);
		}
		function hapus_pembeli($table,$property){
			$this->db->where('id_pembeli',$property);
			return $this->db->delete($table);
		}
		function simpan_pegawai($table,$value){
			return $this->db->insert($table,$value);
		}
		function edit_pegawai($table,$where,$value){
			$this->db->where('id_pegawai',$where);
			return $this->db->update($table,$value);
		}
		function hapus_pegawai($table,$property){
			$this->db->where('id_pegawai',$property);
			return $this->db->delete($table);
		}
	}
?>