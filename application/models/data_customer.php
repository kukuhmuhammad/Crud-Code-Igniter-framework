<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Data_customer extends ci_model
	{
		function getAll()
		{
			return $this->db->get('data_customer');
		}

		function getById($id){
			$this->db->where('data_customer.id',$id);
			$this->db->join('data_transaksi', 'data_transaksi.customer_id = data_customer.id');
			return $this->db->get('data_customer');
		}

		function update($id,$data){
			$this->db->where('id',$id);
			$this->db->update('data_customer',$data);
		}

		function delete($id){
			$this->db->where('id',$id);
			$this->db->delete('data_customer');
		}

		function add($data){
			$this->db->insert('data_customer',$data);
		}
	}
	