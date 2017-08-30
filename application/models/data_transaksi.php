<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Data_transaksi extends ci_model
	{
		function getAll()
		{
			return $this->db->get('data_transaksi');
		}

		function getById($id){
			$this->db->where('id',$id);
			return $this->db->get('data_transaksi');
		}

		function update($id,$data){
			$this->db->where('id',$id);
			$this->db->update('data_transaksi',$data);
		}

		function delete($id){
			$this->db->where('id',$id);
			$this->db->delete('data_transaksi');
		}

		function add($data){
			$this->db->insert('data_transaksi',$data);
		}
	}	
