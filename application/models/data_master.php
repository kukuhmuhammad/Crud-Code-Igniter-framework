<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Data_master extends ci_model
	{
		function getAll()
		{
			return $this->db->get('data_master');
		}

		function getById($id){
			$this->db->where('id',$id);
			return $this->db->get('data_master');
		}

		function update($id,$data){
			$this->db->where('id',$id);
			$this->db->update('data_master',$data);
		}

		function delete($id){
			$this->db->where('id',$id);
			$this->db->delete('data_master');
		}

		function add($data){
			$this->db->insert('data_master',$data);
		}
	}